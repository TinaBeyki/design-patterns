<?php

$remote = new RemoteControl(new Tv());
$remote->togglePower();

$remote = new AdvancedRemoteControl(new Radio());
$remote->togglePower();
