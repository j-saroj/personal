<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Work;

class WorkCategory extends Model
{
    use HasFactory;
    protected $table = 'work_categories';
    protected $fillabe = ['name','created_at','updated_at'];

    public function works()
    {
        return $this->hasMany(Work::class, 'category');
    }
}
