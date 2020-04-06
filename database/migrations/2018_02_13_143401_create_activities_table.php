<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entitle');
            $table->string('trtitle');
            $table->string('frtitle');
            $table->string('slug');
            $table->string('image');
            $table->string('status')->default(0);
            $table->text('enbody');
            $table->text('trbody');
            $table->text('frbody');
            $table->text('ensummary');
            $table->text('trsummary');
            $table->text('frsummary');
            $table->text('images');

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
        Schema::dropIfExists('activities');
    }
}
