<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    
    public function index()
    {
        echo '前台用户首页';
    }

    public function store()
    {
        echo 'POST方式用户首页';
    }

    public function create()
    {
        echo '创建用户';
    }

    public function destroy($id)
    {
        echo '删除用户：'.$id;
    }
}
