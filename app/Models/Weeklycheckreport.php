<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Weeklycheckreport extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'date',
        'vcode',
        'vregno',
        'staffname',
        'sanitizer',
        'wheel',
        'light',
        'horn',
        'mobil',
        'ac',
        'engine',
        'looking_glass',
        'clean_indoor_outdoor',
        'oil',
        'papers',
        'remarks',
    ];
}
