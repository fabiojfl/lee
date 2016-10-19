<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
      protected $table = 'sub_categories';
      protected $fillable = [
        
        'category_id',
        'name',
        'description'
    
      ];
      
      public function products()
      {
      	return $this->hasMany('CodeCommerce\Product');
      }
      public function product()
      {
      	return $this->hasMany('CodeCommerce\Product');
      }
      
      public function categories()
      {
      	return $this->belongsTo('CodeCommerce\Category');
      }
      
      public function category()
      {
      	return $this->belongsTo('CodeCommerce\Category');
      }
	
}
