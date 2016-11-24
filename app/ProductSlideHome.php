<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class ProductSlideHome extends Model
{
    protected $fillable = [
        'product_id',
        'extension'
    ];

    public function product()
    {
        return $this->belongsTo('CodeCommerce\Product');
    }
}
