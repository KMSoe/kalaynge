<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizQuestionAnswer extends Model
{
    use HasFactory, SoftDeletes;

    public function answer()
    {
        return $this->belongsTo(QuizAnswer::class);
    }

    public function question()
    {
        return $this->belongsTo(QuizQuestion::class);
    }
}
