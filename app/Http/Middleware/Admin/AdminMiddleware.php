<?php

namespace App\Http\Middleware\Admin;

use App\Model\Admin;
use App\Model\AdminGroup;
use App\Model\AdminMenuNode;
use App\Model\Menu;
use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!\Session::get('admin_id')){
            return redirect('/admin/login');
        }
        if(\Session::get('admin_id')!=1){
            $array = request()->route()->getAction();
            $url='Admin'.str_replace($array['namespace'].'\Admin','',$array['controller']);
            $menu_id = Menu::where('url',$url)->value('id');
            $group_id = Admin::where('id',\Session::get('admin_id'))->value('group_id');
            if(!AdminMenuNode::where('group_id',$group_id)->where('menu_id',$menu_id)->first()){
                return back()->withErrors('对不起，您没有改权限！');
            }
        }
        return $next($request);
    }
}
