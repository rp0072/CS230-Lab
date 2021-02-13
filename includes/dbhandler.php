<?php

$servename = "localhost";
$DBuname = "rp0072";
$DBPass = "Orangerdog74";
$DBname = "cs230";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}

