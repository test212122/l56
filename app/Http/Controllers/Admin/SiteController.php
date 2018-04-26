<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    //
    //region  站点列表
    public function index(){
        return view('admin.site.index');
    }
    //endregion
}
