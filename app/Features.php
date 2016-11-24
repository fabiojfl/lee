<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
        protected $fillable = [
        'product_id',
        'name'
    ];

    public function product()
    {
        return $this->belongsTo('CodeCommerce\Product');
    }

}
