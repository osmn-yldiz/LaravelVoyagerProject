<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Services extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $fillable = ['icon', 'title', 'description', 'slug', 'status'];

    use Translatable;

    protected $translatable = ['title', 'description', 'slug'];
}
