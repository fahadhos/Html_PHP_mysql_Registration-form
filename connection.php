<?php

$server = "localhost";
$username="root";
$pass="";
$database="mydb";
$connection =new mysqli($server,$username, $pass , $database);

if($connection->connect_error)
{
    die('Error found in '.$connection->connect_error);
}
?>