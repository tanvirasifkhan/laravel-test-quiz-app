<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidate;

class QuizParticipation extends Model {
    use HasFactory;
    protected $table = 'quiz_participations';

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}