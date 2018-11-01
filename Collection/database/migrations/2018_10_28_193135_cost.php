<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
				Schema::create('cost', function(Blueprint $table){
					
					$table->increments('id');
					$table->integer('costs', false, true)->length(11)->nullable(false);
					$table->integer('coin_id', false, true)->length(11)->nullable(false);
					$table->boolean('status')->nullable(false);
					
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
