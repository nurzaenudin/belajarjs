<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$this->call(ItemsSeeder::class);
		$this->call(PurchasesSeeder::class);
		$this->call(PurchasedetailsSeeder::class);
    }
}
