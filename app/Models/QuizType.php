<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizType extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'quiz_types';

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
