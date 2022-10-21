<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizQuestion extends Model
{
    use HasFactory, SoftDeletes;

    public function getPictureAttribute($picture)
    {
        if ($picture) {
            return asset('storage/alphabets/pictures/' . $picture);
        } else {
            return null;
        }
    }

    public function answers()
    {
        return $this->hasMany(QuizAnswer::class);
    }
}
