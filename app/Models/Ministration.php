<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Ministration extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'vehicleregno',
        'staffname',
        'servicing_date',
        'servicing_cost',
        'servecing_receipt',
        'tyre_change_date',
        'tyre_change_cost',
        'tyre_change_receipt',
        'battery_change_date',
        'battery_change_cost',
        'battery_change_receipt',
        'normal_works_date',
        'normal_works_cost',
        'normal_works_receipt',
        'major_works_date',
        'major_works_cost',
        'major_works_receipt',
    ];
}
