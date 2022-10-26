<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizQuestion extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'quiz_questions';

    public function getPictureAttribute($picture)
    {
        $quiz_type = $this->quiz_type;
        $dir = '';

        if($quiz_type == 1) {
            $dir = "alphabets/pictures/";
        } else if($quiz_type == 2) {
            $dir = "numbers/pictures/";
        } else if($quiz_type == 3) {
            $dir = "shapes/pictures/examples/";
        } else if($quiz_type == 4) {
            $dir = "colors/pictures/examples/";
        } else if($quiz_type == 5) {
            $dir = "natures/pictures/";
        }

        if ($picture) {
            return asset('storage/' . $dir . $picture);
        } else {
            return null;
        }
    }

    public function answers()
    {
        return $this->hasMany(QuizAnswer::class);
    }
}
