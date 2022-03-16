<?php

interface ThirdPartyYoutubeLib
{
    function listVideos();

    function getVideoInfo($id);

    public function downloadVideo($id);
}
