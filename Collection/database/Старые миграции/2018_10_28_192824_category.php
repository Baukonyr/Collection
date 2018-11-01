<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
				Schema::create('category', function(Blueprint $table){
					
					$table->increments('id');
					$table->string('name', 50)->nullable(false);
					$table->boolean('status')->nullable(false);
					$table->integer('parent_id', false, true)->length(11);
					
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
