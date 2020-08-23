<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;

// use App\Post;

class User extends Authenticatable  
{
    use Notifiable;
   
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','active', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post(){
        return $this->hasOne('App\Post');
    }
   
    public function role(){
        return $this->belongsTo('App\Role');
    }
  

    public function isAdmin(){
        if($this->role->name == 'administrator'){
            return true;
        }else{
            return false;
        }
    }
    
   public function postExist(){
       if($this->post){
           return true;
       }else{
           return false;
       }
   }

   public function review(){
       return $this->hasOne('App\Review');
   }
}
