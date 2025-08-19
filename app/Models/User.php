<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\CausesActivity;

class User extends Authenticatable
{
    protected $connection = 'sqlite';

    public $incrementing = false;

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, CausesActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'nik',
        'name',
        'email',
        'password',
        'keycloak_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
