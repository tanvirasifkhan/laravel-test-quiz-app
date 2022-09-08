<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\QuizParticipation;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Candidate extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'candidates';

    public function quizParticipation(){
        return $this->hasMany(QuizParticipation::class);
    }
}