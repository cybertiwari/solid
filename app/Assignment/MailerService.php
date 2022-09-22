<?php
namespace App\Assignment;

use App\Assignment\DatabaseLogger;

class MailerService
{
    private $logger;

    public function __construct(DatabaseLogger $logger)
    {
        $this->logger = $logger;
    }

    public function sendEmail()
    {
        try {
            // send email logic here
            return 'Mail Sent!';
        } catch (\Exception $exception) {
            $this->logger->logError($exception->getMessage());
        }
    }
}

