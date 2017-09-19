<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table='books';
    //protected $connection='mysql';
    protected $fillabe=['title','description','picture','category_id'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
        

    }
}
