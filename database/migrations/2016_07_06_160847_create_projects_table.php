<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('projects', function ($table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('desc');
            $table->integer('unit');
            $table->string('supervisor');
            $table->date('startDate');
            $table->date('endDate');


            


            

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
