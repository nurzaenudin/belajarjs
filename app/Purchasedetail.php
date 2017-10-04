<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchasedetail extends Model
{
    protected $fillable=['pembeli', 'item_id'];
	
	public function item()
	{
		return $this->belongsTo('App\Item');
	}
	
}
