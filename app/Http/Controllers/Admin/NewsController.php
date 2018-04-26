<?php

namespace App\Http\Controllers\Admin;

use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //region  管理员列表
    public function index(){
        return view('admin.news.index');
    }
    //endregion

    //region  添加
    public function create(Request $request){
        if($request->method()=='GET'){
            return view('admin.news.create');
        }else{
            if(News::where('user_name',$request->get('user_name'))->first()){
                return back()->withErrors('用户名已经存在！');
            }
            if(News::addData($request->all())){
                return redirect('/admin/news/index')->withErrors('添加成功！');
            }else{
                return back()->withErrors('添加失败！');
            }
        }
    }
    //endregion
    //region  编辑
    public function edit(Request $request){
        if($request->method()=='GET'){
            $data = News::where('id',$request->get('id'))->first();
            return view('admin.news.edit',compact('data'));
        }else{
            if(News::addData($request->all())){
                return redirect('/admin/news/index')->withErrors('编辑成功！');
            }else{
                return back()->withErrors('编辑失败！');
            }
        }
    }
    //endregion
    //region  注释
    public function dels(Request $request){
        $id = $request->get('id');
        if(News::where('id',$id)->delete()){
            return response()->json(["status"=>1,"msg"=>"操作成功！"]);
        }else{
            return response()->json(["status"=>0,"msg"=>"操作失败！"]);
        }
    }
    //endregion
}
