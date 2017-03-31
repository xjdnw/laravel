<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    
    /**
     * @name 后台首页
     */
    public function index()
    {
        echo '后台首页';
    }
}
