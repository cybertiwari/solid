<?php
namespace App\Assignment;

use App\Assignment\VideoPlayer;

class OGGVideoPlayer extends VideoPlayer
{
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'mp4') {
            throw new \Exception('Extension does not support');
        }
        return view('blog/video');
    }
}