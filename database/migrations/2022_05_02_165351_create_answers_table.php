<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('questions_id');
            $table->unsignedBigInteger('answerers_id');
            $table->string("answers", 255);
            $table->timestamps();

            //foreign key questions
            $table->foreign('questions_id')
            ->references('id')
            ->on('questions')
            ->onDelete('cascade');  
            
            //$table->char('answerers_access_token', 20)->unique()->nullable(false);
            //foreign key answerer
            $table->foreign('answerers_id')
            ->references('id')
            ->on('answerers')
            ->onDelete('cascade');;  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
