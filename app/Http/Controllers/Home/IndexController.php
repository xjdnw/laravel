<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    
    /**
     * @name 前台首页
     */
    public function index()
    {   
        $str = '<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>开始使用Layui</title>
</head>
<body>
<h1>这是一行中文</h1>
</body>
</html>';
        echo $str;
    }
}
