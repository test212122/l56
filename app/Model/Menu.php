<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table='admin_menu';

    protected $guarded=[];

    //region  后台左侧用户的菜单
    public static function leftMenu($admin_id){
        $data = self::orderBy('sort','asc')->whereNull('parent_id')->where('is_show',true)->get();
        foreach ($data as $val){
            $val->attributes['child']=self::orderBy('sort','asc')->where('parent_id',$val->id)->get();
            foreach ($val->child as $v){
                $v->attributes['child']=self::orderBy('sort','asc')->where('parent_id',$v->id)->get();
            }
        }
        return $data;
    }
    //endregion

    //region  后台权限管理
    public static function leftMenu1($admin_id){
        if(Admin::adminInfo()->user_name=='admin@admin.com'){
            $data = self::orderBy('sort','asc')->whereNull('parent_id')->where('is_show',true)->get();
            foreach ($data as $val){
                $val->attributes['child']=self::orderBy('sort','asc')->where('is_show',true)->where('parent_id',$val->id)->get();
                foreach ($val->child as $v){
                    $v->attributes['child']=self::orderBy('sort','asc')->where('is_show',true)->where('parent_id',$v->id)->get();
                }
            }
        }else{
            $menu_ids = AdminMenuNode::where('group_id',Admin::adminInfo()->group_id)->pluck('menu_id');
            $data = self::orderBy('sort','asc')->whereIn('id',$menu_ids)->whereNull('parent_id')->where('is_show',true)->get();
            foreach ($data as $val){
                $val->attributes['child']=self::orderBy('sort','asc')->where('is_show',true)->whereIn('id',$menu_ids)->where('parent_id',$val->id)->get();
                foreach ($val->child as $v){
                    $v->attributes['child']=self::orderBy('sort','asc')->where('is_show',true)->whereIn('id',$menu_ids)->where('parent_id',$v->id)->get();
                }
            }
        }

        return $data;
    }
    //endregion

    //region  注释
    public static function addData($po_data){
        if(isset($po_data['id'])){
            $data = self::where('id',$po_data['id'])->first();
        }else{
            $data             = new  Menu();
        }
        $data ->title     = $po_data['title'];
        $data ->url       = $po_data['url'];
        $data ->parent_id = $po_data['parent_id'];
        $data ->sort      = $po_data['sort'];
        $data ->font      = $po_data['font'];
        $data ->is_show   = isset($po_data['is_show'])?true:false;
        $data ->is_parameter   = isset($po_data['is_parameter'])?true:false;
        $data ->parameter   = $po_data['parameter'];
        if($data->save()){
            return true;
        }else{
            return false;
        }
    }
    //endregion
}
