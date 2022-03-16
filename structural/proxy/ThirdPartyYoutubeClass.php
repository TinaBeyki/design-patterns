<?php

class ThirdPartyYoutubeClass implements ThirdPartyYoutubeLib
{
    public function listVideos(): array
    {
        return [
            'Python crash course',
            'Design patterns Kristopher Okhravi',
            'Php clean code'
        ];
    }

    public function getVideoInfo($id): array
    {
        $info = null;
        switch ($id)
        {
            case 0:
                $info = [$id, 'Python crash course', '1000 views'];
                break;
            case 1:
                $info =  [$id, 'Python crash course', '1001 views'];
                break;
            case 2:
                $info =  [$id, 'Python crash course', '1002 views'];
                break;
            default:
                break;
        }
        return $info;
    }

    public function downloadVideo($id): void
    {
        dump('downloading ... ');
    }
}
