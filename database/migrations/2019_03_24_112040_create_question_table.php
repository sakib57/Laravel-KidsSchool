<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
           
             $table->increments('id');
            $table->text('q_1');
            $table->text('q_2');
            $table->text('q_3');
            $table->text('q_4');
            $table->text('q_5');
            $table->text('q_6');
            $table->text('q_7');
            $table->text('q_8');
            $table->text('q_9');
            $table->text('q_10');
            $table->text('op_1_1');
            $table->text('op_1_2');
            $table->text('op_1_3');
            $table->text('op_1_4');
            $table->text('op_2_1');
            $table->text('op_2_2');
            $table->text('op_2_3');
            $table->text('op_2_4');
            $table->text('op_3_1');
            $table->text('op_3_2');
            $table->text('op_3_3');
            $table->text('op_3_4');
            $table->text('op_4_1');
            $table->text('op_4_2');
            $table->text('op_4_3');
            $table->text('op_4_4');
            $table->text('op_5_1');
            $table->text('op_5_2');
            $table->text('op_5_3');
            $table->text('op_5_4');
            $table->text('op_6_1');
            $table->text('op_6_2');
            $table->text('op_6_3');
            $table->text('op_6_4');
            $table->text('op_7_1');
            $table->text('op_7_2');
            $table->text('op_7_3');
            $table->text('op_7_4');
            $table->text('op_8_1');
            $table->text('op_8_2');
            $table->text('op_8_3');
            $table->text('op_8_4');
            $table->text('op_9_1');
            $table->text('op_9_2');
            $table->text('op_9_3');
            $table->text('op_9_4');
            $table->text('op_10_1');
            $table->text('op_10_2');
            $table->text('op_10_3');
            $table->text('op_10_4');
            $table->string('category');
            $table->text('url');
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
        Schema::dropIfExists('question');
    }
}
