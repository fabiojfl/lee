<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{	
    protected $fillable = 
	[
		'name',
		'email',
		'subject',
		'description'
	];
}
