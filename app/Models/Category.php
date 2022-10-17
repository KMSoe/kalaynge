<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function getSymbolPictureAttribute($symbol_picture)
    {
        return asset('storage/categories/pictures/symbols/' . $symbol_picture);
    }

    public function getPicturesAttribute($pictures)
    {
        $pictures = json_decode($pictures);
        $result = array();

        foreach ($pictures as $item) {
            $result[] = asset('storage/categories/pictures/examples/' . $item);
        }

        return $result;
    }
}
