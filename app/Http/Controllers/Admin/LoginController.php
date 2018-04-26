<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //region  注释
    public function login(Request $request){
        if($request->method()=='GET'){
            //Admin::create(['user_name'=>'admin@admin.com','password'=>\Crypt::encrypt('admin888'),'mobile'=>'15839928290']);
            return view('admin.login');
        }
        $admin = Admin::where('user_name',$request->get('userName'))->lockForUpdate()->first();
        if(!$admin){
            return back()->withErrors('用户名或者密码错误！');
        }
        if($request->get('password')!=\Crypt::decrypt($admin->password)){
            return back()->withErrors('用户名或者密码错误');
        }
        \Session::put('admin_id',$admin->id);
        return redirect('/admin/index')->withErrors('欢迎您回来');
    }
    //endregion
}
