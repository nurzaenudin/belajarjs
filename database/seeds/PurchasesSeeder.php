<?php

use Illuminate\Database\Seeder;
use App\Purchase;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchase= new Purchase();
		$purchase->name='udin';
		$purchase->save();
		
		$purchase= new Purchase();
		$purchase->name='caca';
		$purchase->save();
		
		$purchase= new Purchase();
		$purchase->name='auf';
		$purchase->save();
    }
}
