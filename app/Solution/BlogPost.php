<?php
namespace App\Solution;

use App\Solution\Repository\OutputInterface;
use App\Solution\Repository\ConnectionInterface;

class BlogPost
{
    protected $connection;

    public function __construct(
        ConnectionInterface $connection
    ) {
        $this->connection = $connection->getConnection();
    }

    public function getAll(OutputInterface $output)
    {
        $blogs = file_get_contents($this->connection);
        return $output->output($blogs);
    }
}

