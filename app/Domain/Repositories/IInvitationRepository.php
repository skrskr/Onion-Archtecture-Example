<?php

namespace App\Domain\Repositories;


interface IInvitationRepository
{
    public function hasInvitation(string $phoneNumber): bool;
}
