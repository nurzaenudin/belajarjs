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
		
		$item= new Item();
		$item->name='Pulpen';
		$item->price=2000;
		$item->save();
		
		$item= new Item();
		$item->name='Pensil';
		$item->price=3000;
		$item->save();
		
		$item= new Item();
		$item->name='Stempel';
		$item->price=4000;
		$item->save();
		
		$item= new Item();
		$item->name='Stapler';
		$item->price=5000;
		$item->save();
    }
}
