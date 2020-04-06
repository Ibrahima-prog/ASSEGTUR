<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments_faculties', function (Blueprint $table) {
            
            $table->unsignedInteger('departments_id')->index();
            $table->unsignedInteger('faculties_id')->index();
            $table->foreign('departments_id')->references('id')->on('departments')->onDelete('cascade');
            
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
        Schema::dropIfExists('departments_faculties');
    }
}
