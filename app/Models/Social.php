<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube',
        /* diğer sosyal medya platformları */];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
