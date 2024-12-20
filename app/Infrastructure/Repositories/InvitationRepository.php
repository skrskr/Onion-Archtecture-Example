<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Repositories\IInvitationRepository;
use App\Infrastructure\Models\Invitation;

class InvitationRepository implements IInvitationRepository
{
    public function hasInvitation(string $phoneNumber): bool
    {
        return Invitation::where('phone_number', $phoneNumber)->exists();
    }
}
