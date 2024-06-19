<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'user_id',
        'degree',
        'position',
        'phone',
        'address',
        'birthday_date',
        'experience',
        'freelance',
        'photo',
        'cv',
        'about_user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
