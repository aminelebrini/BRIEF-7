<?php

$host = "127.0.0.1";
$username = "root";
$serverpass = "123456";
$port = "3306";
$data_base = "novacraft";
$status = "";
$connect = mysqli_connect($host, $username, $serverpass, $data_base, $port);

if(!$connect)
{
    $status = "The database was not connected!";

    echo $status;
}
$status = "The database was contacted!";
echo $status;
?>