<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Project extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
				Schema::create('Project', function(Blueprint $table){
					$table->increments('id');
					$table->string('name', 50)->nullable();
					$table->string('description', 150)->nullable(false);
					$table->integer('status_id', false, true)->length(11)->nullable();
					$table->integer('counterparty_id', false, true)->length(11)->nullable();
					$table->dateTime('dateStart')->nullable(false);
					$table->dateTime('dateEnd')->nullable(false);
					
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
