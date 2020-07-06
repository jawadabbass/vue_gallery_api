<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'title', 'description',
    ];


    public function images()
    {
        return $this->hasMany('App\Image', 'category_id', 'id');
    }
}
