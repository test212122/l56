<?php

namespace App\Http\Controllers\Admin;

use App\Model\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    //region  菜单
    public function index(){
        return view('admin.menu.index');
    }
    //endregion
    //region  添加
    public function create(Request $request){
        if($request->method()=="GET"){
            return view('admin.menu.create');
        }else{
            if($request->get('is_parameter')){
                if($request->get('parameter')){
                    return back()->withErrors('参数不能空！');
                }
            }
            if(Menu::addData($request->all())){
                return redirect('/admin/menu/index')->withErrors('添加成功！');
            }else{
                return back()->withErrors('添加失败！');
            }
        }

    }
    //endregion

    //region  注释
    public function edit(Request $request){
        if($request->method()=="GET"){
            $data = Menu::where('id',$request->get('id'))->first();
            return view('admin.menu.edit',compact('data'));
        }else{
            if($request->get('is_parameter')){
                if($request->get('parameter')){
                    return back()->withErrors('参数不能空！');
                }
            }
            if(Menu::addData($request->all())){
                return redirect('/admin/menu/index')->withErrors('修改成功！');
            }else{
                return back()->withErrors('修改失败！');
            }
        }
    }
    //endregion
    //region  删除
    public function dels(Request $request){
        $id = $request->get('id');
        if(Menu::where('parent_id',$id)->first()){
            return response()->json(["status"=>0,"msg"=>'存在下级禁止删除！']);
        }
        if(Menu::where('id',$id)->delete()){
            return response()->json(["status"=>1,"msg"=>"操作成功！"]);
        }else{
            return response()->json(["status"=>0,"msg"=>"操作失败！"]);
        }
    }
    //endregion

}
