<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guard=[];
    protected $fillable=['post_id','id','created_at','updated_at','content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}


