<?php

namespace App\Infrastructure\Models;

use App\Domain\Models\AccountContract;
use Illuminate\Database\Eloquent\Model;

class Account extends Model implements AccountContract
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'full_name',
        'phone_number',
        'photo_url',
        'joined_date',
        'blocked',
    ];
}
