<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'user_id'
    ];

    /**
     * Get the user that owns the skill.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
