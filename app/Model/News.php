<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='news';

    protected $guarded=[];

    //region  修改数据
    public static function addData($po_data){
        if(isset($po_data['id'])){
            $data = self::where('id',$po_data['id'])->first();
        }else{
            $data             = new  News();
        }
        $data ->title         = $po_data['title'];
        $data ->class_id      = $po_data['class_id'];
        $data ->sort          = $po_data['sort'];
        $data ->status        = $po_data['status'];
        $data ->intro        = $po_data['intro'];
        $data ->content        = $po_data['content'];
        if($data->save()){
            return true;
        }else{
            return false;
        }
    }
    //endregion
}
