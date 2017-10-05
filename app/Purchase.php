<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable=['name'];
	
	public function purchasedetails()
	{
		return $this->hasMany('App\Purchasedetail');
	}
}
