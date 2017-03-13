<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    protected $fillable = [
        'product_id',
        'title',
        'description'
    ];

    public function product()
    {
        return $this->belongsTo('CodeCommerce\Product');
    }

    public function itemFeatures()
    {
        return $this->hasMany('CodeCommerce\itemFeature');
    }

}
