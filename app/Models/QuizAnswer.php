<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizAnswer extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function question()
    {
        return $this->belongsTo(QuizQuestion::class);
    }

    public function getPictureAttribute($picture)
    {
        if ($picture) {
            return asset('storage/quizzes/pictures/answers/' . $picture);
        } else {
            return null;
        }
    }
}
