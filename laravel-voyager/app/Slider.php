<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Slider extends Model
{
    use Translatable;

    protected $translatable = ['text_one', 'text_two', 'text_three', 'button_text'];
}
