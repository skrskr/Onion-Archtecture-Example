<?php

namespace App\Infrastructure\Services;

use App\Domain\Contracts\IJwtGenerator;
use App\Domain\Models\AccountContract;
use App\Domain\Models\DeviceContract;

class JWTGenerator implements IJwtGenerator
{
    public function generateAccessToken(AccountContract $account, DeviceContract $device): string
    {
        return "access_token";
    }
    public function generateRefreshToken(AccountContract $account, DeviceContract $device): string
    {
        return "refresh_token";
    }
}
