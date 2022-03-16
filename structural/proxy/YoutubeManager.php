<?php

class YoutubeManager
{
    private ThirdPartyYoutubeLib  $thirdPartyYoutubeLib;

    public function __construct(ThirdPartyYoutubeLib  $thirdPartyYoutubeLib)
    {
        $this->thirdPartyYoutubeLib = $thirdPartyYoutubeLib;
    }

    public function renderVideoPage($id)
    {
        return $this->thirdPartyYoutubeLib->getVideoInfo($id);
    }

    public function renderListPanel()
    {
        return $this->thirdPartyYoutubeLib->listVideos();
    }

    public function reactOnUserInput($id)
    {
        $this->renderListPanel();
        $this->renderVideoPage($id);
    }
}

