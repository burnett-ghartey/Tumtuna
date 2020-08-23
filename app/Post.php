<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use App\Review;



class Post extends Model  
{

    use Sluggable;
    use SluggableScopeHelpers;
    
   
    
    protected $fillable = [
        'user_id', 'category_id','photo_id', 'published', 'rating_cache', 'rating_count', 'phone', 'city', 'state', 'address', 'description'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'user.name'
            ]
        ];
    }
   

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }

    public function getStarRating(){
      
        $count = $this->reviews()->count();
        if(empty($count)){
            return 0;
        }
          $starCountSum = $this->reviews()->sum('rating');
          $average = $starCountSum/$count;
          return $average;
    }

    // public function getUserReviews($postid){
    //         // $post = Post::all()->first();
    //         // $postid = $post->id;


    //     $review = Review::where('post_id', $postid)->latest()->first();
    //     $reviewUser = $review->user_id;
    //     $userforreview = User::where('id', $reviewUser)->first();
    //      return $userforreview->name;
    // }



    public function postReviews(){
        return $this->belongsTo('App\Review');
    }

 


       
   
}
