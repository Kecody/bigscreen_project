<?php

namespace App\Models;

use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answerer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'access_token',
        'email',
    ];
    
    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
