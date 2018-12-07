<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'brand', 'category', 'description','category_id','brand_id', 'image',
	];
	
	public function getName()
   {
   	return $this->name;
   }

    public function category()
	{
	
		return $this->hasOne(Category::class, 'id', 'category_id');
	}

	public function brand()
	{
	
		return $this->hasOne(Brand::class, 'id', 'brand_id');
	}
	public function descrption()
	{
		return $this->hasOne(Description::class, 'id', 'description_id');
	}

	public function user()
	{
		// return $this->belongsToMany(Color::class, 'color_product', 'product_id', 'color_id')->withTimestamps();

		// En las realción es de "muchos", si las foreign keys y los constraints están bien hechos
		// No es necesario pasar los demas parámetros
		return $this->belongsTo(User::class);
	}
}
