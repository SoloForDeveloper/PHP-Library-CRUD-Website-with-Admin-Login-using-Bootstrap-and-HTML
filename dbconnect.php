<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="yt_library";

$con = mysqli_connect($servername,$username,$password,$dbname) or die("Failed to connect with database").mysqli_error($con);