<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'country', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function products()
	{
		// return $this->belongsToMany(Product::class, 'color_product', 'color_id', 'product_id')->withTimestamps();

		// En las relación es de "muchos", si las foreign keys y los constraints están bien hechos
		// No es necesario pasar los demas parámetros
		return $this->hasMany(Product::class);
	}
}
