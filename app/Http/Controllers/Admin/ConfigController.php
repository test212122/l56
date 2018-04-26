<?php

namespace App\Http\Controllers\Admin;

use App\Model\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    //region  注释
    public function edit(Request $request){
        if($request->method()=='GET'){
            return view('admin.config.create');
        }else{
            Config::whereNotNull('field')->delete();
            $data = $request->all();
            unset($data['_token']);
            $array=[];$i=0;
            foreach ($data as $key=>$val){
                $array[$i]['field']= $key;
                $array[$i]['value']= $val;
                $i++;
            }
            if(Config::insert($array)){
                return back()->withErrors('操作成功！');
            }else{
                return back()->withErrors('操作失败！');
            }

        }
    }
    //endregion
}
