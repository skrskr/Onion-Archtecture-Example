<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Models\AccountContract;
use App\Domain\Repositories\IAccountRepository;
use App\Infrastructure\Models\Account;

class AccountRepository implements IAccountRepository
{
    public function getByPhoneNumber(string $phoneNumber): AccountContract
    {
        return Account::where('phone_number', $phoneNumber)->first();
    }
    public function save(AccountContract $account): void
    {
        $account->save();
    }
    public function isAdmin(string $phoneNumber): bool
    {
        return false;
    }
}
