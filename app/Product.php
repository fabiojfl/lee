<?php namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = [
        'name',
        'description',
        'price',
        'sale',
        'featured',
        'recommend',
        'sub_category_id'
    ];

    public function subCategory()
    {
        return $this->belongsTo('CodeCommerce\SubCategory');
    }
    
    public function subCategories()
    {
    	return $this->belongsTo('CodeCommerce\SubCategory');
    }

    public function images()
    {
        return $this->hasMany('CodeCommerce\ProductImage');
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
