<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Sliders extends Model
{
    use HasFactory;

    protected $table = 'sliders';
    protected $fillable = ['photo', 'text_one', 'text_two', 'text_three', 'button_text', 'button_link', 'status'];

    use Translatable;

    protected $translatable = ['text_one', 'text_two', 'text_three', 'button_text'];
}
