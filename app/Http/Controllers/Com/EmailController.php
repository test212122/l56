<?php

namespace App\Http\Controllers\Com;

use App\Mail\Mail;
use App\Model\Email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    //
    //region  注释
    public function sendEmail($email){
        $code = rand(100000,999999);
        $re=Email::send($email,$code);
        if($re){
            return true;
        }else{
            return false;
        }
    }
    //endregion
}
