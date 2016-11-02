<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable =
        [
            'name',
            'price',
            'sale',
            'qtd',
            'total',
            'description'
        ];

}
