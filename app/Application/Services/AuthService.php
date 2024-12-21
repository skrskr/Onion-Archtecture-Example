<?php

namespace App\Application\Services;

use App\Domain\Contracts\IAuthProvider;
use App\Domain\Contracts\IJwtGenerator;
use App\Domain\Repositories\IAccountRepository;
use App\Domain\Repositories\IInvitationRepository;
use App\Presentation\Http\Requests\LoginRequest;
use App\Presentation\Http\Resources\LoginResource;

class AuthService
{
    public function __construct(
        private IAccountRepository $accountRepository,
        private IInvitationRepository $invitationRepository,
        private IAuthProvider $authProvider,
        private IJwtGenerator $jwtGenerator
    )
    {}

    public function handle(LoginRequest $request)
    {
        $phoneNumber = $this->authProvider->getVerifiedPhoneNumber($request->validated('id_token'));

        return new LoginResource([
            'refresh_token' => 'refresh_token',
            'access_token' => 'access_token',
        ]);
    }
}
