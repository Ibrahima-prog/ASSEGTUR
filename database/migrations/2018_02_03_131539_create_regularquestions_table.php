<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegularquestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regularquestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->text('enquestion');
            $table->text('trquestion');
            $table->text('enanswer');
            $table->text('transwer');
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
        Schema::dropIfExists('regularquestions');
    }
}
