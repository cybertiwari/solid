<?php
namespace App\Solution\Output;

use App\Solution\Repository\OutputInterface;

class HtmlOutput implements OutputInterface{

    public function output($blogs)
    {
        $blogs = json_decode($blogs,true);
        return view('blog/index',[
            'blogs' => $blogs
        ]);
    }
}