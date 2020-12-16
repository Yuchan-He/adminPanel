<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// 检查权限，要先引入权限model
use App\Models\Node;

class IndexController extends Controller
{

    // login成功画面の画面表示
    public function index(){
        $allow_node = array_keys(session('admin.node'));   
        $menuData = Node::where('is_menu','1') -> whereIn('id',$allow_node) -> get() -> toArray();
     	return view('admin.index.index',compact('menuData'));
    }

    // login成功welcome画面
    public function welcome(){
    	return view('admin.index.welcome');
    }

    // logout画面
    public function logout(){
    	auth() ->guard('admin')-> logout();
		return redirect(route('home')) -> with('success','ログアウトしました');
    }
}
