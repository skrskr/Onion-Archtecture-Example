<?php

namespace App\Infrastructure\Models;

use App\Domain\Models\InvitationContract;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model implements InvitationContract
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'inviter_id',
        'phone_number'
    ];
}
