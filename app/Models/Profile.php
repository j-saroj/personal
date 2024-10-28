<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'dob',
        'address',
        'number',
        'title',
        'personalIntroduction',
        'image',
        'words',
        'email',
        'fathersName',
        'mothersName',
        'grandfather',
        'grandmother',
        'spouse',
        'education',
        'achievement',
        'training',
        'experience',
        'hobby',
        'skills',
    ];
    public function getDobAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = Carbon::parse($value)->format('Y-m-d');
    }
}
