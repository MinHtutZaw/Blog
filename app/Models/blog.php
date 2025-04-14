<?php

namespace App\Models;
use Illuminate\Support\Facades\File;


use function PHPUnit\Framework\fileExists;


class Blog
{
    public static function All()
    {
        $file = File::files(resource_path("blogs"));
        return array_map(function ($file) {
            return $file->getContents();
        }, $file);
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
