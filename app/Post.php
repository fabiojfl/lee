<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id','name','comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
