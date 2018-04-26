<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use App\Model\AdminGroup;
use App\Model\AdminMenuNode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminGroupController extends Controller
{
    //region  管理员分组列表
    public function index(){
        return view('admin.admin_group.index');
    }
    //endregion
    //region 添加
    public function create(Request $request){
        if ($request->method()=='GET'){
            return view('admin.admin_group.create');
        }else{
            \DB::beginTransaction();
            if(count($request->get('group_id'))==0){
                return back()->withErrors('请选择权限！');
            }

            //添加分组的信息
            $data          = new AdminGroup();
            $data -> title = $request->get('title');
            $data ->is_enable   = $request->get('is_enable')?true:false;
            $re = $data ->save();
            //添加权限的信息
            $array =[];$i=0;
            foreach ($request->get('group_id') as $val){
                $array[$i]['group_id'] = $data->id;
                $array[$i]['menu_id'] = $val;
                $i++;
            }
            $re1 = AdminMenuNode::insert($array);
            if($re && $re1){
                \DB::commit();
                return redirect('/admin/menu/index')->withErrors('添加成功！');
            }else{
                \DB::rollBack();
                return back()->withErrors('添加失败！');
            }
        }
    }
    //endregion
    //region 编辑
    public function edit(Request $request){
        if ($request->method()=='GET'){
            $id     = $request->get('id');
            $data   = AdminGroup::where('id',$id)->first();
            $menu_id   = AdminMenuNode::where('group_id',$id)->pluck('menu_id');
            $menu_id   = $menu_id->toArray();
            return view('admin.admin_group.edit',compact('data','menu_id'));
        }else{
            $id     = $request->get('id');
            \DB::beginTransaction();
            if(count($request->get('group_id'))==0){
                return back()->withErrors('请选择权限！');
            }
            $re2 = AdminMenuNode::where('group_id',$id)->delete();
            //添加分组的信息
            $data          = AdminGroup::where('id',$id)->first();
            $data -> title = $request->get('title');
            $data ->is_enable   = $request->get('is_enable')?true:false;
            $re = $data ->save();
            //添加权限的信息
            $array =[];$i=0;
            foreach ($request->get('group_id') as $val){
                $array[$i]['group_id'] = $data->id;
                $array[$i]['menu_id'] = $val;
                $i++;
            }
            $re1 = AdminMenuNode::insert($array);
            if($re && $re1 && $re2){
                \DB::commit();
                return redirect('/admin/admin_group/index')->withErrors('编辑成功！');
            }else{
                \DB::rollBack();
                return back()->withErrors('编辑失败！');
            }
        }
    }
    //endregion
    //region  管理员分组删除操作
    public function dels(Request $request){
        $id = $request->get('id');
        if(Admin::where('group_id',$id)->first()){
            return response()->json(["status"=>0,"msg"=>"存在所属管理员，禁止删除该分组！"]);
        }
        if(AdminMenuNode::where('group_id',$id)->first()){
            $re = AdminMenuNode::where('group_id',$id)->delete();
        }else{
            $re =  true;
        }
        \DB::beginTransaction();
        if(AdminGroup::where('id',$id)->delete() && $re){
            \DB::commit();
            return response()->json(["status"=>1,"msg"=>"操作成功！"]);
        }else{
            \DB::rollBack();
            return response()->json(["status"=>0,"msg"=>"操作失败！"]);
        }
    }
    //endregion
}
