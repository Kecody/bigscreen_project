<?php

namespace App\Models;

use App\Models\Quiz;
use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type',
        'choices'
    ];

    public function answer(){

        return $this->hasOne(Answer::class);
    }
    public function quiz(){

        return $this->belongsTo(Quiz::class);    
    }  
}
