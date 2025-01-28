<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = ['categories'];
    protected $fillable = [
        'name',
        'path_to_cover',
    ];

}
