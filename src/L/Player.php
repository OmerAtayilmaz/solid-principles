<?php

namespace App\L;

use Exception;

class VideoPlayer
{
    public function play($file)
    {
        echo 'Playing music';
    }
}

class AviVideoPlayer extends VideoPlayer
{
    public function play($file)
    {
        // ihlal eden kod, bu sınıfın sorumluluğu değil
        if(pathinfo($file, PATHINFO_EXTENSION) !== 'avi'){
            throw new Exception('Invalid file format');
        }
    }
}