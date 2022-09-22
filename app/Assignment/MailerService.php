<?php
namespace App\Assignment;

use App\Assignment\Logger;

class MailerService
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function sendEmail()
    {
        try {
            // send email logic here
            return true;
        } catch (\Exception $exception) {
            $this->logger->logError($exception->getMessage());
            return false;
        }
    }
}

