<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class NewsletterContent extends Model
{
    use Translatable;

    protected $translatable = ['title', 'description'];
}
