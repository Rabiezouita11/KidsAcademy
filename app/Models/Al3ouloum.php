<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Al3ouloum extends Model
{
    use HasFactory;
    public function parent(){
        return $this->belongsTo('App\Models\User');
   }
   
   public function enseignant(){
    return $this->belongsTo('App\Models\Admin');
}
}
