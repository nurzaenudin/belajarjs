<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	
		$item= new Item();
		$item->name='Kertas';
		$item->price=1000;
		$item->save();
		//
    }
}