<?php

use Illuminate\Database\Seeder;
use App\Purchasedetail;

class PurchasedetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchasedetail= new Purchasedetail();
		$purchasedetail->purchase_id=1;
		$purchasedetail->item_id=2;
		$purchasedetail->save();
		
		$purchasedetail= new Purchasedetail();
		$purchasedetail->purchase_id=2;
		$purchasedetail->item_id=3;
		$purchasedetail->save();
		
		$purchasedetail= new Purchasedetail();
		$purchasedetail->purchase_id=2;
		$purchasedetail->item_id=5;
		$purchasedetail->save();
		
		$purchasedetail= new Purchasedetail();
		$purchasedetail->purchase_id=3;
		$purchasedetail->item_id=4;
		$purchasedetail->save();
		
		$purchasedetail= new Purchasedetail();
		$purchasedetail->purchase_id=3;
		$purchasedetail->item_id=5;
		$purchasedetail->save();
		
		$purchasedetail= new Purchasedetail();
		$purchasedetail->purchase_id=3;
		$purchasedetail->item_id=1;
		$purchasedetail->save();
    }
}
