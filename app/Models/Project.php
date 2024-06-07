<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'img', 'category_id'];

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id');
    }
}
