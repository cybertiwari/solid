<?php
namespace App\Solution\Output;

use App\Solution\Repository\OutputInterface;

class JsonOutput implements OutputInterface{

    public function output($blogs)
    {
        return $blogs;
    }
}