<?php

$hostName = "sql205.epizy.com";
$dbUser = "epiz_33670068";
$dbPassword = "VsvC7bdK1d6NqX";
$dbName = "epiz_33670068_project1";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>