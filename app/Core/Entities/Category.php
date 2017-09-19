<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;
    protected $table='categories';
    //protected $connection='mysql';
    protected $fillabe=['name','description'];
    public function books(){
        return $this->hashMany(Book::class,'category_id');


    }


}
