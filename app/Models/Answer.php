<?php

namespace App\Models;


use App\Models\Answerer;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'answerers_access_token',
        'answers'
    ];

    public function question(){

        return $this->belongsTo(Question::class);
    }
    
    public function answerer(){
        
        return $this->belongsTo(Answerer::class, 'answerers_access_token');
    }
}
