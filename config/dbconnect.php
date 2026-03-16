<?php
$server="localhost";
$userid="root";
$pwd="";
$dbname="login_app";
$conn = mysqli_connect($server, $userid, $pwd, $dbname);
//Check connection
if (!$conn) 
  die("Connection Error: " . mysqli_connect_error());

