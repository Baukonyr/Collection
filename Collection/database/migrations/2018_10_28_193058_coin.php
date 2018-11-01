<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Coin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
				Schema::create('coin', function(Blueprint $table){
					
					$table->increments('id');
					$table->integer('user_id', false, true)->length(11)->nullable(false);
					$table->integer('category_id', false, true)->length(11)->nullable();
					$table->string('name', 50)->nullable(false);
					$table->string('description', 200)->nullable();
					$table->text('picture')->nullable(false);
					
					$table->string('state', 50)->nullable(false);
					$table->string('year', 4)->nullable();
					
					$table->string('metal', 50)->nullable();
					
					$table->boolean('defects')->nullable(false);
					$table->text('description_defects')->nullable();
					
					$table->boolean('restoration')->nullable(false);
					$table->text('description_restoration')->nullable();
					
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
