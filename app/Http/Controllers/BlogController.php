<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
      
        return view('blogs',[
            'blogs' =>$this->getBlogs(),
            'categories'=>Category::all()
        ]);
    }

    public function showBlog(Blog $blog){
        return view('blog',[
            'blog' => $blog, 
            'randomBlogs'=> Blog::inRandomOrder()->take(3)->get(),
            
        ]);
    }

    protected function getBlogs(){
        $blogs = Blog::latest();    
        if(request('search')){
            $blogs = $blogs->where(function($query) {
                $query->where('title', 'like', '%' . request('search') . '%')
                      ->orWhere('intro', 'like', '%' . request('search') . '%');
            })->orWhereHas('author', function($query) {
                $query->where('name', 'like', '%' . request('search') . '%');
            });
        }   
        return $blogs->get();
    }
}
