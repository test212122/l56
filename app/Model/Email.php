<?php

namespace App\Model;

use App\Mail\Mailcode;
use Illuminate\Database\Eloquent\Model;
use Mail;
class Email extends Model
{
    //
    //region  注释
    public static function send($email,$code){
        $re=Mail::to($email)->send(new Mailcode($code));
        if($re){
            return true;
        }else{
            return false;
        }
    }
    //endregion
}
