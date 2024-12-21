<?php

namespace App\Infrastructure\Services;

use App\Domain\Contracts\ILogger;
use Illuminate\Support\Facades\Log;

class Logger implements ILogger
{
    public function log(string $message): void
    {
        Log::info($message);
    }

    public function errorLog(string $message): void
    {
        Log::error($message);
    }
}
