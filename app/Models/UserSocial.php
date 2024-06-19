<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'social_id',
        'url',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function social()
    {
        return $this->belongsTo(Social::class);
    }

    public function getSocialNameAttribute()
    {
        return ucfirst(strtolower($this->social->title));
    }
}
