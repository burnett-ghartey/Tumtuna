<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Review extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'user.name'
            ]
        ];
    }
    
    protected $with = ['user'];

    protected $fillable = [
        'headline', 'description', 'rating', 'post_id'
    ];
   

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function post(){
        return $this->belongsTo('App\Post');
    }
   


    
}
