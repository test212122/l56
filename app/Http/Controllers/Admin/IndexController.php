<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use App\Model\Email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    //region  注释
    public function index(){
        /*Email::send('723995187@qq.com',123456);*/
        return view('admin.index.index');
    }
    //endregion
    //region  退出
    public function quit(){
        \Session::forget('admin_id');
        return redirect('/admin/login');
    }
    //endregion
    //region  修改密码
    public function password(Request $request){
        if($request->method()=='GET'){
            return view('admin.index.password');
        }else{
            $data = Admin::where('id',Admin::adminInfo()->id)->first();
            $data ->password = \Crypt::encrypt($request->get('password'));
            if($data->save()){
                return redirect('/admin/index')->withErrors('密码修改成功!');
            }
        }

    }
    //endregion
}
