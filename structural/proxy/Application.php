<?php

class Application
{
    public function __init()
    {
        $youtubeService = new ThirdPartyYoutubeClass();
        $serviceProxy = new CachedYoutubeClass($youtubeService);
        $manager = new YoutubeManager($serviceProxy);
        $manager->reactOnUserInput(1);
    }

}