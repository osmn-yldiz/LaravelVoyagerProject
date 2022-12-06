<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectioncalls extends Model
{
    use HasFactory;

    protected $table = 'sectioncalls';
    protected $fillable = ['title', 'description', 'button_text', 'button_link', 'status'];
}
