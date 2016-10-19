<?php namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $fillable = [

        'name',
        'description'
    ];

    public function subCategories()
    {
        return $this->hasMany('CodeCommerce\SubCategory');
    }
    
    public function subCategory()
    {
    	return $this->hasMany('CodeCommerce\SubCategory');
    }
    

}