<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guard=[];
    protected $fillable=['title','id','created_at','updated_at','content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
