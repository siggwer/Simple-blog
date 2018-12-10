<?php

if(session_id())
{
    session_destroy();
}
session_start();
require_once './../vendor/autoload.php';
require __DIR__ . './../etc/router.php';

start($_SERVER);
