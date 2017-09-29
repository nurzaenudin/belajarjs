<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchasedetails', function (Blueprint $table) {
            $table->increments('id');
			$table->string('pembeli');
			$table->integer('item_id')->unsigned();
			
			
            $table->timestamps();
			
			$table->foreign('item_id')->references('id')->on('items')->onUpdate('cascade')->onDelete('cascade');
			
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchasedetails');
    }
}
