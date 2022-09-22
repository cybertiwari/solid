<?php
namespace App\Solution\Database;

use App\Solution\Repository\ConnectionInterface;

class Connection implements ConnectionInterface{
    
    public function getConnection()
    {
        return __DIR__."/db.json";
    }
}