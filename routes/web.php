<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loadwelcomeed by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Home",
        "username" => "fritslx",
        "day" => 25
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "username" => "fritslx",
        "email" => "fritslx@gmail.com"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog",
        "posts" => Post::all()
    ]);
});

// halaman single blog
Route::get('blog/{slug}', function ($slug) {

    

    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});
