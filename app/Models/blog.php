<?php

namespace App\Models;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

use function PHPUnit\Framework\fileExists;


class Blog
{   
    public $title;
    public $slug;
    public $intro;
    public $body;



    public function __construct($title,$slug,$intro,$body){
        $this->title=$title;
        $this->slug=$slug;
        $this->intro=$intro;
        $this->body=$body;
    }
    public static function All()
    {   
        $files = File::files(resource_path("blogs"));
        $blogs=[];
        foreach ($files as $file) {
            $obj=YamlFrontMatter::parseFile($file);
            $blog=new Blog($obj->title, $obj->slug, $obj->intro, $obj->body());
            $blogs[]=$blog;
        }
        return $blogs;

       
        // return array_map(function ($file) {
        //     return $file->getContents();
        // }, $file);
    }



    public static function find($slug)
    {
        // $path = __DIR__."/../resources/blogs/$filename.html";
        $path = resource_path("blogs/$slug");

        if (!file_exists($path)) {
            return redirect('/');
        }
        return cache()->remember("blogs.$slug", now()->addMinutes(1), function () use ($path) {
            return file_get_contents($path);
        });
    }
}
