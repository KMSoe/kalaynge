<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'pictures' => 'array'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function getNextAttribute(){
        return static::where('id', '>', $this->id)->orderBy('id','asc')->value('id');
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public  function getPreviousAttribute(){
        return static::where('id', '<', $this->id)->orderBy('id','desc')->value('id');
    }

    public function getSymbolPictureAttribute($symbol_picture)
    {
        return asset('storage/colors/pictures/symbols/' . $symbol_picture);
    }

    public function getPicturesAttribute($pictures)
    {
        $pictures = json_decode($pictures);
        $result = array();

        foreach ($pictures as $item) {
            $result[] = asset('storage/colors/pictures/examples/' . $item);
        }

        return $result;
    }
}
