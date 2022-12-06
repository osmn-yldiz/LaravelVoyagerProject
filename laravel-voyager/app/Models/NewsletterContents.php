<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class NewsletterContents extends Model
{
    use HasFactory;

    protected $table = 'newsletter_contents';
    protected $fillable = ['icon', 'title', 'description'];

    use Translatable;

    protected $translatable = ['title', 'description'];
}
