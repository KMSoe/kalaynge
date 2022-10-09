<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nature extends Model
{
    use HasFactory, SoftDeletes;

    public function getPictureAttribute($picture)
    {
        return asset('storage/natures/' . $picture);
    }
}
