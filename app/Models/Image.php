<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
class Image extends Model
{
    use HasFactory ,Commentable;

    public function likes()
{

    return $this->hasMany('App\Models\Like');
}


public function isLikedByLoggedInUser()
{

    return $this->likes->where('user_id',auth()->user()->id)->isEmpty() ? false :
    true;
}

}
