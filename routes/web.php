<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


//local usamos laravel9.test /

    // return "index;";
    // return view('welcome');

    // Vamos a realizar un portafolio de github
    // Personal- sitio.com -> welcome
    // Personal- sitio.com/contact -> contacto -> contact
    // Personal- sitio.com/blog -> blog
    // Personal- sitio.com/about -> about
Route::view('/', "welcome")->name("home");
Route::view('/contact', "contacto")->name("contact");
Route::get('/blog', [PostController::class, "index"])->name("blog");

Route::view('/about', "about")->name("about");

// podemos responder peticiones de estos tipos
/*
Route::post();
Route::patch();
Route::put();
Route::delete();
Route::options();
*/
