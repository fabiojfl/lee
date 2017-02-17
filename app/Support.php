<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'content'

    ];

    public function user()
    {
        return $this->belongsTo('CodeCommerce\User');
    }
}
