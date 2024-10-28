<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WorkCategory;

class Work extends Model
{
    use HasFactory;
    protected $table = 'works';
    protected $fillabe = ['name','category','client','date','link','description','image','created_at','updated_at'];

    public function work_categories()
    {
        return $this->belongsTo(WorkCategory::class, 'work_categories');
    }
}
