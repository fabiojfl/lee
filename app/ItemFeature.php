<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class ItemFeature extends Model
{
    protected $fillable = [
        'feature_id',
        'text'
    ];

    public function features()
    {
        return $this->belongsTo('CodeCommerce\Features');
    }
}
