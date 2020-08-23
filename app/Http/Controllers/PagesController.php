<?php


namespace App\Http\Controllers;
use App\Post;
use App\User;
use App\Photo;
use App\Review;
use App\Category;
use Illuminate\Http\Request;


use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{


    public function services(){
        return view('pages.services');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    
    
    public function search(){
        
        $categories = Category::all();
        $posts = Post::orderBy('id', 'desc')->paginate(4);
        $user = User::all();
        
         
        return view('pages.search', compact('categories', 'posts', 'user'));
    }

    
    public function show($slug){
        $post = Post::findBySlugOrFail($slug);
        $postreviews = $post->reviews()->orderBy('id', 'DESC')->get();
        
        return view('pages.details-page', compact('post', 'postreviews'));
    }

    public function filter(Request $request){
        $category_id = $request->category_id;
        $city = $request->city;
        $categories = Category::all();
 
        $posts = Post::where('category_id', '=', $category_id)->where('city','like','%'.$city.'%')->get();

         return view('pages.filter', compact('posts', 'categories'));
    }
}



    
