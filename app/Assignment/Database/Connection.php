<?php
namespace App\Assignment\Database;

class Connection {
    
    public function getConnection()
    {
        return __DIR__."/db.json";
    }
}