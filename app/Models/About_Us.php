<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_Us extends Model
{
    use HasFactory;
    protected $table = 'about_us';
    protected $fillable = ['title', 'description', 'image', 'page_name'];
}
