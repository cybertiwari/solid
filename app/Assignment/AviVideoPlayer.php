<?php
namespace App\Assignment;

use App\Assignment\VideoPlayer;

class AviVideoPlayer extends VideoPlayer
{
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi') {
            throw new \Exception('Extension does not support');
        }
        return 'video is playing';
    }
}