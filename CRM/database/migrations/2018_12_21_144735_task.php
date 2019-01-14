<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Task extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
				Schema::create('Task', function(Blueprint $table){
					$table->increments('id');
					$table->string('name', 50);
					$table->string('description', 200)->nullable(false);
					$table->integer('project_id', false, true)->length(11)->nullable();
					$table->dateTime('dateStart')->nullable(false);
					$table->dateTime('dateEnd')->nullable(false);
					$table->integer('time', false, true)-length(11)->nullable(false);
					$table->integer('cost', false, true)->length(11)->nullable(false);
					
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
