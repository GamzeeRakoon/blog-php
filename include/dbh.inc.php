<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "blog";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("connect failed: " . mysqli_connect_error());
}