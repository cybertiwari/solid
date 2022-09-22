<?php
namespace App\Solution;

use App\Solution\Repository\LoggerInterface;

class Logger implements LoggerInterface
{
    public function logError(string $message)
    {
        // Error is logged
    }
}
