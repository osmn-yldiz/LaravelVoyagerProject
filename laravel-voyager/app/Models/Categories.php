<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['title', 'slug', 'status'];

    use Translatable;

    protected $translatable = ['title', 'slug'];
}
