<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entitle');
            $table->string('trtitle');
            $table->string('frtitle');
             $table->string('slug');
             $table->string('sDay')->nullable();
            $table->string('sMonth')->nullable();
            $table->string('sYear')->nullable();
            $table->text('enbody');
            $table->text('trbody');
            $table->text('frbody');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('news');
    }
}
