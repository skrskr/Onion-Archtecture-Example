<?php

namespace App\Domain\Contracts;

use App\Domain\Models\AccountContract;
use App\Domain\Models\DeviceContract;

interface IJwtGenerator
{
    public function generateAccessToken(AccountContract $account, DeviceContract $device): string;
    public function generateRefreshToken(AccountContract $account, DeviceContract $device): string;
}
