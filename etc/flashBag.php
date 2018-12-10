<?php

function flashBag($key, $message)
{
    $_SESSION['flash'][$key] = $message;
}
