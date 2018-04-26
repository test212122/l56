<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewsClass extends Model
{
    protected $table='news_class';

    protected $guarded=[];

    //region  推荐状态
    public static function status($num){
        switch ($num){
            case '': return '暂无'; break;
            case '1': return '首页'; break;
            case '2': return '热门'; break;
        }
    }
    //endregion

    //region  修改数据
    public static function addData($po_data){
        if(isset($po_data['id'])){
            $data = self::where('id',$po_data['id'])->first();
        }else{
            $data             = new  NewsClass();
        }
        $data ->title         = $po_data['title'];
        $data ->parent_id      = $po_data['parent_id'];
        $data ->sort          = $po_data['sort'];
        $data ->status        = isset($po_data['status'])?implode(',',$po_data['status']):'';
        $data ->intro        = $po_data['intro'];
        if($data->save()){
            return true;
        }else{
            return false;
        }
    }
    //endregion
}
