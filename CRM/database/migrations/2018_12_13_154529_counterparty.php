<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Counterparty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
				Schema::create('Counterparty', function(Blueprint $table){
					$table->increments('id');
					$table->string('name', 50);
					$table->integer('user_id', false, true)->length(11)->nullable(false);
					$table->integer('contact_id', false, true)->length(11)->nullable(false);
					$table->integer('address_id', false, true)->length(11)->nullable();
					$table->integer('status_id', false, true)->length(11)->nullable(false);
					$table->string('comments', 100); 
					
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
