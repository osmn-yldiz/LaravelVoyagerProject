<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterLists extends Model
{
    use HasFactory;

    protected $table = 'newsletter_lists';
    protected $fillable = ['name', 'phone', 'email'];
}
