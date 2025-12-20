<?php

$host = "";
$username = "";
$serverpass = "";
$port = "";
$data_base = "";
$status = "";
$connect = mysqli_connect($host, $username, $serverpass, $data_base, $port);

if(!$connect)
{
    $status = "The database was not connected!";
}
$status = "The database was contacted!";
?>