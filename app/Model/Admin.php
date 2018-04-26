<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table='admins';

    protected $guarded=[];

    //管理用户的数据
    public function group()
    {
        return $this->belongsTo('App\Model\AdminGroup','group_id','id');
    }
    //region  注释
    public static function adminInfo(){
        //数据库缓存
        $minutes=5;//1分钟缓存
        $value = \Cache::remember('admin_info'.\Session::get('admin_id'),$minutes, function() {
            return self::find(\Session::get('admin_id'));//需要查询的数据值
        });
        return $value;
    }
    //endregion
    //region  修改数据
    public static function addData($po_data){
        if(isset($po_data['id'])){
            $data = self::where('id',$po_data['id'])->first();
        }else{
            $data             = new  Admin();
        }
        $data ->user_name     = $po_data['user_name'];
        $data ->password      = \Crypt::encrypt($po_data['password']);
        $data ->group_id      = $po_data['group_id'];
        $data ->mobile        = $po_data['mobile'];
        if($data->save()){
            return true;
        }else{
            return false;
        }
    }
    //endregion
}
