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
            // $table->unsignedBigInteger('answers_answerers_id');
            $table->char('answerers_access_token', 32)->nullable(false); // n'est pas oblige d'etre unique car ce n'est pas une foreign key
            $table->string("answers", 255);
            $table->timestamps();

            //foreign key questions
            $table->foreign('questions_id')
            ->references('id')
            ->on('questions')
            ->onDelete('cascade');  
            
            //foreign key answerer token
            $table->foreign('answerers_access_token')
            ->references('access_token')
            ->on('answerers')
            ->onDelete('cascade'); 
        
            //foreign key answerer id
            // $table->foreign('answers_answerers_id')
            // ->references('answerers_id')
            // ->on('answerers')
            // ->onDelete('cascade');    
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
