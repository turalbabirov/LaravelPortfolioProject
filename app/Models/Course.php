<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'learn', 'logo', 'describe', 'user_id'];

    // User modeline belongsTo ilişkisi tanımlama
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
