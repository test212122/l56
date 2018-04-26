<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table='config';

    protected $guarded=[];

    public $timestamps=false;

    //region  读取数据
    public static function read($field){
        return self::where('field',$field)->value('value');
    }
    //endregion
}
