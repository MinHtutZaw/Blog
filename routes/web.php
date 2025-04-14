<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use function PHPUnit\Framework\fileExists;

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

Route::get('/blogs', function () {
    return view('blogs',[
        'blogs' =>Blog::All(),
    ]

);
});
 

Route::get('/blogs/{blog}',function($slug){
    return view('blog',[
        'blog' => Blog::find($slug),
    ]);
})->where('blog','[A-z0-9\-_.]+');
