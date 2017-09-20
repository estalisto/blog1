<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Book extends Model
{
    //
    use SoftDeletes;
    protected $table='books';
    //protected $connection='mysql';
    protected $fillabe=['title','description','picture','category_id'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
        

    }
}
