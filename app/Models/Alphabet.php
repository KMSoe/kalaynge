<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alphabet extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

     /**
     * Write code on Method
     *
     * @return response()
     */
    public function getNextAttribute(){
        return static::where('id', '>', $this->id)->orderBy('sorting','asc')->value('id');
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public  function getPreviousAttribute(){
        return static::where('id', '<', $this->id)->orderBy('sorting','desc')->value('id');
    }

    public function getPictureAttribute($picture)
    {
        return asset('storage/alphabets/pictures/' . $picture);
    }
}
