<?php

namespace App\Domain\Contracts;

use App\Domain\Models\Account;
use App\Domain\Models\Device;

interface IJwtGenerator
{
    public function generateAccessToken(Account $account, Device $device): string;
    public function generateRefreshToken(Account $account, Device $device): string;
}
