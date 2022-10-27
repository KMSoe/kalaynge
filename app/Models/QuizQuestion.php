<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizQuestion extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'quiz_questions';

    public function getPictureAttribute($picture)
    {
        if ($picture) {
            return asset('storage/quizzes/pictures/questions/' . $picture);
        } else {
            return null;
        }
    }

    public function answers()
    {
        return $this->hasMany(QuizAnswer::class);
    }
}
