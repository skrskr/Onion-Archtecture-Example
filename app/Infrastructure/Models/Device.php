<?php

namespace App\Infrastructure\Models;

use App\Domain\Models\DeviceContract;
use Illuminate\Database\Eloquent\Model;

class Device extends Model implements DeviceContract
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'device_type',
        'last_access_time',
        'refresh_token',
        'fcm_token',
    ];
}
