<?php
namespace App\Solution\Repository;

interface LoggerInterface{
    public function logError(string $message);
}