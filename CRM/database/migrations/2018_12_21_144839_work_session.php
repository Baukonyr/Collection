<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkSession extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
				Schema::create('WorkSession', function(Blueprint $table){
					$table->increments('id');
					$table->integer('task_id', false, true)->length(11)->nullable();
					$table->dateTime('dateStart')->nullable(false);
					$table->dateTime('dateEnd')->nullable(false);
					$table->integer('dateSum', false, true)->length(11)->nullable();
					
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
