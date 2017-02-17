<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class ProductRelated extends Model
{
	protected $fillable = [
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo('CodeCommerce\Product');
    }
}
