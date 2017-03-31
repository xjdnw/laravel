<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //

    public function index()
    {   
        //header('content-type:text/html;charset=utf-8');
        return '后台用户首页';
    }

}
