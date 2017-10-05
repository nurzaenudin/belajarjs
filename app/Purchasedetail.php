<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchasedetail extends Model
{
    protected $fillable=['purchase_id', 'item_id'];
	
	public function item()
	{
		return $this->belongsTo('App\Item');
	}
	
	public function purchase()
	{
		return $this->belongsTo('App\Purchase');
	}
	
}
