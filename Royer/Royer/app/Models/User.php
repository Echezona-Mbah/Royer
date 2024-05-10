<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'address',
        'phone',
        'image',
        'typeofadmin',
        'password',
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

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function team()
    {
        return $this->hasMany(Team::class,'user_id');
    }

    public function abouts()
    {
        return $this->hasMany(About::class,'user_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class,'user_id');
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class,'user_id');
    }

    public function news()
    {
        return $this->hasMany(News::class,'user_id');
    }

    public function evens()
    {
        return $this->hasMany(Even::class,'user_id');
    }


    public function galeries()
    {
        return $this->hasMany(Galery::class,'user_id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class,'user_id');
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class,'user_id');
    }

    public function infos()
    {
        return $this->hasMany(Info::class,'user_id');
    }


}
