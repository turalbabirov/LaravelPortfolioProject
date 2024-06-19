<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['position', 'company', 'start_date', 'end_date', 'description'];

    /**
     * Get the user that owns the experience.
     */
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
