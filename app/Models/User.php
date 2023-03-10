<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'email',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ideas() {
        return $this->hasMany(Ideas::class);
    }

    public function getAvatar() {
        $fisrtCharacter = $this->email[0];

        if (is_numeric($fisrtCharacter)) {
            $intToUse = ord(strtolower($fisrtCharacter)) - 21;
        } else {
            $intToUse = ord(strtolower($fisrtCharacter)) - 96;
        }

        return 'https://gravatar.com/avatar/'.md5($this->email).'?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-'.$intToUse.'.png';
    }
}
