<?php


namespace App\Models;

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;




class Post

{
    public $title;  

    public $excerpt;

    public $date;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }



    public static function all()
    {

        

        return array_map(fn($file) => $file->getContents(), $files);

        
    }

    public static function find($slug)
    {
        if (! file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
    
    }

    return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path)); 
       


    


      

    }


}