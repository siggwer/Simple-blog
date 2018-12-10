<?php

function purifie($value)
{
    return strip_tags(htmlspecialchars($value));
}