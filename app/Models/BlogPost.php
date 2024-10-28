<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $table = 'blogposts';
    protected $fillable = ['title','author','author_description','image', 'content','category','date','created_at','updated_at'];
}
