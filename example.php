<?php
include_once('vendor/autoload.php');

$PHPDocker = new \PHPDocker\RemoteClient();
$PHPDocker->setEndPoint('http://127.0.0.1:4243');

echo $PHPDocker->getEndPoint();
