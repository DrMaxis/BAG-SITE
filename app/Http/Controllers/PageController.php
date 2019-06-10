<?php

namespace App\Http\Controllers;
use App\News;
use App\Post;
use App\Image;
use App\Media;

use App\LatestNews;
use App\FrontPagePost;
use Illuminate\Http\Request;

class PageController extends Controller
{

    protected $posts_per_page = 6;
    protected $images_per_page = 10;
    /**
     * This controller serves each page and loads database data and passes them to the views
     * @param
     * 
     * use App\Media;
     * use App\Post;
     * use App\Image;
     * 
     * 
     */




 /**
         * 
         * Landing Page 
         */





    public function landing()
    {
       
        $posts = Post::inRandomOrder()->get();
        $galleryimages = Image::inRandomOrder()->get();
        $medialinks = Media::orderBy('id', 'desc')->get();
        $frontPagePosts = FrontPagePost::orderBy('id', 'asc')->get();
        $data = array('posts' => $posts,'galleryimages'=> $galleryimages, 'medialinks' => $medialinks, 'frontPagePosts' => $frontPagePosts);
         return view('pages.landing')->with($data);
      
    }
     /**
         * 
         * Music Page
         */
    public function music(Request $request){

        


        $posts =  Post::orderBy('id', 'desc')->paginate($this->posts_per_page);
        


        if($request->ajax()){
            
            return [
            'next_page' => $posts->nextPageUrl(),
            'posts' => view('inc.musicajax')->with('posts', $posts)->render()
            
            
            ];
        }

        //$posts = Post::orderBy('id', 'desc')->get();
        
return view('pages.music')->with(compact('posts'))->render();

    }

/**
         * 
         * News Page 
         */


    public function news(Request $request) {
        $medialinks = Media::all();
        $posts =  Post::orderBy('id', 'desc')->get();
        $news = LatestNews::orderBy('id', 'desc')->get();
        return view('pages.news')->with([
            'medialinks' => $medialinks,
            'posts' => $posts,
            'news' => $news,
            ]);


    }


    
     /**
         * 
         * Gallery Page 
         */


    public function gallery(Request $request){
        $galleryimages = Image::orderBy('id', 'desc')->paginate($this->images_per_page);



        if($request->ajax()){
            
            return [
            'next_page' => $galleryimages->nextPageUrl(),
            'images' => view('inc.galleryajax')->with('galleryimages', $galleryimages)->render()
            
            
            ];
        }
        return view('pages.gallery')->with(compact('galleryimages'))->render();
    }




     /**
         * 
         * About Page 
         */


    public function about(){
        return view('pages.about');
    }



 /**
         * 
         * Media Page 
         */



    public function media(){
        $medialinks = Media::all();
        return view('pages.media')->with('medialinks', $medialinks);
    }

    public function merch(){
        
        return view('pages.merch');
    }

    




    
}
