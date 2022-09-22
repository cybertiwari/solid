<?php
namespace App\Assignment;

use App\Assignment\Model\Author;
use App\Assignment\Database\Connection;

class BlogPost
{
    protected $connection;

    public function __construct(
        Connection $connection
    ) {
        $this->connection = $connection->getConnection();
    }

    public function getAll()
    {
        return file_get_contents($this->connection);
    }

    public function getJsonList()
    {
        return $this->getAll();
    }

    public function getHtmlList()
    {
        $blogs = json_decode($this->getAll(),true);
        return view('blog/index',[
            'blogs' => $blogs
        ]);
    }
}

