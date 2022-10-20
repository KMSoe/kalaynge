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
        return asset('storage/alphabets/pictures/' . $picture);
    }

    public function answers()
    {
        return $this->hasMany(QuizAnswer::class);
    }
}
