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

include_once "auth.php";

function makeConn()
{
    $conn = new mysqli(...mySQLIAuth());
    if ($conn->connect_errno) die($conn->connect_error);
    $conn->set_charset('utf8');
    return $conn;
}

function makeQuery($conn, $qry)
{
    $a = [];
    $result = $conn->query($qry);
    if ($conn->errno) die($conn->error);
    while ($row = $result->fetch_object()) {
        $a[] = $row;
    }
    return $a;
}
