<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'fullname',
        'email',
        'password',
        'picture',
        'activestatus',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        // Model oluşturulurken veya güncellenirken fullname sütununu güncelle
        static::saving(function ($user) {
            $user->fullname = $user->name . ' ' . $user->surname;
        });
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the profile record associated with the user.
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }


    public function expertise()
    {
        return $this->hasMany(Expertise::class);
    }


    public function skills()
    {
        return $this->hasMany(Skill::class);
    }


    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function projectCategories()
    {
        return $this->hasMany(ProjectCategory::class);
    }


    public function projects()
    {
        return $this->hasMany(Project::class);
    }


    public function courses()
    {
        return $this->hasMany(Course::class);
    }


    public function social()
    {
        return $this->hasOne(Social::class);
    }
}
