<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //region  管理员列表
    public function index(){
        return view('admin.admin.index');
    }
    //endregion

    //region  添加
    public function create(Request $request){
        if($request->method()=='GET'){
            return view('admin.admin.create');
        }else{
            if(Admin::where('user_name',$request->get('user_name'))->first()){
                return back()->withErrors('用户名已经存在！');
            }
            if(Admin::addData($request->all())){
                return redirect('/admin/admin/index')->withErrors('添加成功！');
            }else{
                return back()->withErrors('添加失败！');
            }
        }
    }
    //endregion
    //region  编辑
    public function edit(Request $request){
        if($request->method()=='GET'){
            $data = Admin::where('id',$request->get('id'))->first();
            return view('admin.admin.edit',compact('data'));
        }else{
            if(Admin::where('user_name',$request->get('user_name'))->count()>=2){
                return back()->withErrors('用户名已经存在！');
            }
            if(Admin::addData($request->all())){
                return redirect('/admin/admin/index')->withErrors('编辑成功！');
            }else{
                return back()->withErrors('编辑失败！');
            }
        }
    }
    //endregion
    //region  注释
    public function dels(Request $request){
        $id = $request->get('id');
        if(Admin::where('id',$id)->delete()){
            return response()->json(["status"=>1,"msg"=>"操作成功！"]);
        }else{
            return response()->json(["status"=>0,"msg"=>"操作失败！"]);
        }
    }
    //endregion
}
