<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    /*获取文章列表数据
     * return json
     * */
    public function index() {
        return route('category_list');
    }
}
