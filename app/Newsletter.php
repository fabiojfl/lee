<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = ['user_id','email'];

    public function user()
    {
        return $this->belongsTo('CodeCommerce\User');
    }
}
