<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Post;
use App\User;
use App\Category;
use App\Photo;

class GuestProfileController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $userID = Auth::user()->id;
        
        $postID = Post::where("user_id", "=", $userID)->first();
        $category = Category::where("id", "=", $postID->category_id)->first();
        $photo = Photo::where("id", "=", $postID->photo_id)->first();
       
       
        return view('pages.profile.index', compact('user','postID','category', 'photo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $userID = User::where('id', "=", $user->id)->first();
        $userPost = Post::where('user_id', '=', $userID->id)->first();
        $userPhoto = Photo::where('id', '=', $userPost->photo_id)->first();
        $categories = Category::all();
 
        return view('pages.profile.edit', compact('user', 'categories', 'userPhoto', 'userID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       
        
        $post = Post::find($id);
      
        $input = $request->all();

        if($file = $request->file('file')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/post', $name);

            $image = Photo::create(['filename'=>$name]);
            $input['photo_id'] = $image->id;
        }
        $post->update($input);

        Session::flash('flash_guest', 'The post has been edited');
        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
