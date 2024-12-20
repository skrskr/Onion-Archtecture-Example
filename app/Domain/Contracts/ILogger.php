<?php

namespace App\Domain\Contracts;


interface ILogger
{
    public function log(string $message): void;
    public function errorLog(string $message): void;
}
