<?php

function print_p($v)
{
    echo "<pre>", print_r($v), "</pre>";
}

function load_json_file($filename)
{
    $file = file_get_contents($filename);
    return json_decode($file);
}
