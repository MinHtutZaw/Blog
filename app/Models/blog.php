<?php
namespace App\Models;
use function PHPUnit\Framework\fileExists;


class Blog
{
    public static function find($slug){
        // $path = __DIR__."/../resources/blogs/$filename.html";
        $path = resource_path("blogs/$slug");
       
       if(!file_exists($path)){
        return redirect('/');
       }
       return cache()->remember("blogs.$slug",now()->addMinutes(1),function()use($path){
        return file_get_contents($path);
       });
    }
}





