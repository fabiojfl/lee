<?php namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {


    protected $fillable = [
        'category_id',
        'name',
        'quickoverview',
        'mainsentence',
        'price',
        'sale',
        'prodqtd',
        'description',
        'featured',
        'recommend'
    ];

    public function category()
    {
        return $this->belongsTo('CodeCommerce\Category');
    }
    
    public function categories()
    {
    	return $this->belongsTo('CodeCommerce\Category');
    }

    public function images()
    {
        return $this->hasMany('CodeCommerce\ProductImage');
    }
	
	public function homeSlide()
    {
        return $this->hasMany('CodeCommerce\ProductSlideHome');
    }
	
	public function features()
    {
        return $this->hasMany('CodeCommerce\Features');
    }
    
    public function getNameDescriptionAttribute()
    {
        return $this->name." - ".$this->description;
    }

    public function tags()
    {
        return $this->belongsToMany('CodeCommerce\Tag');
    }

    public function getTagListAttribute()
    {
        $tags = $this->tags()->lists('name')->all();
        return implode(', ',$tags);
    }

    public function setTagAttribute($empty)
    {
        $value =  implode(', ', $empty);
        return $this->tags()->attach($value);
    }

    public function scopeOfCategory($query, $type)
    {
        return $query->where('category_id', '=', $type);
    }

    public function scopeRecommended($query)
    {
        return $query->where('recommend', '=', 1);
    }
    
    public function scopeFeatured($query)
    {
    	return $query->where('featured', '=', 1);
    }
    
    public function scopeFindCategory($query, $id)
    {
    	return $query->where('category_id', '=', $id);
    }

}
