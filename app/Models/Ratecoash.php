<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Ratecoash extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected  $table = 'ratesofcoash' ;
    protected $fillable = [

        // 'training',
        // 'feeding',
        'user_id',
        'Coash_id',
        // 'Regularity',
        // 'Response',
        'stars',
        // 'created_at',
        // 'updated_at',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

// بكلمك ع المسانجر
