<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $post = DB::table('post')->get();

        return view("blog", ["post" => $post]);
    }
}

