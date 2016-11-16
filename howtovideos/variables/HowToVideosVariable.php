<?php

namespace Craft;

class HowToVideosVariable
{

    public function getWistiaHowToVideos()
    {
        return craft()->howToVideos_wistiaVideos->getVideos();
    }
}