<?php
$dbconnect = mysqli_connect("localhost","pdc20user","pdc20","pdc20");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
    die();
}