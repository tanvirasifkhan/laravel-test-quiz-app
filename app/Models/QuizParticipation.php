<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidate;
use App\Models\Quiz;

class QuizParticipation extends Model {
    use HasFactory;
    protected $table = 'quiz_participations';

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }

    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }
}