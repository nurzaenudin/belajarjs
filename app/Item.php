<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable=['name', 'price'];
	
	public function purchasedetails()
	{
		return $this->hasMany('App\Purchasedetail');
	}
}
