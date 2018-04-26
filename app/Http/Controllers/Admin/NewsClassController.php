<?php

namespace App\Http\Controllers\Admin;

use App\Model\NewsClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsClassController extends Controller
{
    //region  管理员列表
    public function index(){
        return view('admin.news_class.index');
    }
    //endregion

    //region  添加
    public function create(Request $request){
        if($request->method()=='GET'){
            return view('admin.news_class.create');
        }else{
            if(NewsClass::addData($request->all())){
                return redirect('/admin/news_class/index')->withErrors('添加成功！');
            }else{
                return back()->withErrors('添加失败！');
            }
        }
    }
    //endregion
    //region  编辑
    public function edit(Request $request){
        if($request->method()=='GET'){
            $data = NewsClass::where('id',$request->get('id'))->first();
            return view('admin.news_class.edit',compact('data'));
        }else{
            if(NewsClass::addData($request->all())){
                return redirect('/admin/news_class/index')->withErrors('编辑成功！');
            }else{
                return back()->withErrors('编辑失败！');
            }
        }
    }
    //endregion
    //region  注释
    public function dels(Request $request){
        $id = $request->get('id');
        if(NewsClass::where('parent_id',$id)->first()){
            return response()->json(["status"=>0,"msg"=>"存在下级，禁止删除！"]);
        }
        if(NewsClass::where('id',$id)->delete()){
            return response()->json(["status"=>1,"msg"=>"操作成功！"]);
        }else{
            return response()->json(["status"=>0,"msg"=>"操作失败！"]);
        }
    }
    //endregion
}
