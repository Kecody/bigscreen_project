<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('title', 45);
            $table->string('description', 255);
            $table->enum('type', ['A','B','C']);
            $table->string('choices')->nullable();//JSON
            $table->timestamps();

            //foreign key
            $table->foreignId('quiz_id')
            ->nullable()
            ->constrained('quiz')
            ->on('quiz')
            ->onDelete('cascade');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
