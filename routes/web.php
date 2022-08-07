<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "HOME"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        "title" => "Post Categories",
        "categories" => Category::all()
    ]);
});

route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        "title" => $category->name,
        "posts" => $category->posts,
        'category' => $category->name 
    ]);
});




