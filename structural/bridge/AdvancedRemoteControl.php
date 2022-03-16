<?php

class AdvancedRemoteControl extends RemoteControl
{

    public function mute() {
        $this->device->setVolume(0);
    }

}
