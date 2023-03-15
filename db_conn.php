<?php

$sname = "localhost";
$unmae = "root";
$password = "1234";

$db_name = "asdas";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(!$conn){
    echo "Conection failed!";
}