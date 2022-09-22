<?php
namespace App\Solution;

use App\Solution\VideoPlayer;

class OGGVideoPlayer extends VideoPlayer
{
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'mp4') {
            return view('blog/video');
        }
        return view('blog/video');
    }
}