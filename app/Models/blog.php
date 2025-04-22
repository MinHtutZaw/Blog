<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

use function PHPUnit\Framework\fileExists;


class Blog
{   
    public $title;
    public $slug;
    public $intro;
    public $body;
    public $date;



    public function __construct($title,$slug,$intro,$body,$date){
        $this->title=$title;
        $this->slug=$slug;
        $this->intro=$intro;
        $this->body=$body;
        $this->date =$date;
    }
    public static function All()
    {   
        $files = File::files(resource_path("blogs"));
        return collect($files)
            ->map(function($file){
                $obj=YamlFrontMatter::parseFile($file);
                return new Blog($obj->title, $obj->slug, $obj->intro, $obj->body(),$obj->date);           
            })
            ->sortByDesc('date');
       
        // return array_map(function ($file) {
        //     return $file->getContents();
        // }, $file);
    }



    public static function find($slug)
    {
        // $path = __DIR__."/../resources/blogs/$filename.html";
        // $path = resource_path("blogs/$slug");

        // if (!file_exists($path)) {
        //     return redirect('/');
        // }
        // return cache()->remember("blogs.$slug", now()->addMinutes(1), function () use ($path) {
        //     return file_get_contents($path);
        // });

        return $blogs = static::All()->firstWhere(('slug'),$slug);

    }
    
    public static function findOrFail($slug){

        $blog = static::find($slug);
        if(!$blog){
            throw new ModelNotFoundException("Blog is not found");
        }
        return $blog;
    }

}
