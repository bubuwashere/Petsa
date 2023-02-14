<?php

// Local
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_petsa";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$conn) // Local only
{
    $sql = "CREATE DATABASE db_petsa";
    $con = mysqli_connect($db_host, $db_user, $db_pass);
    mysqli_query($con, $sql);
    mysqli_connect($db_host, $db_user, $db_pass, "db_petsa");
}
// echo "Connected.";

?>