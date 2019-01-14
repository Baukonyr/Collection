<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
				Schema::create('Address', function(Blueprint $table){
					$table->increments('id');
					
					$table->string('country', 50)->nullable(false);
					$table->string('region', 50)->nullable(false);
					$table->string('city', 50)->nullable(false);
					$table->string('type', 5)->nullable(false);
					$table->string('name', 50)->nullable(false);
					$table->string('block', 3)->nullable();
					$table->string('number', 11)->nullable();
					$table->string('room', 11)->nullable();
					
					$table->timestamps();
				});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
