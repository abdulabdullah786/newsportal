<?php
$host = "localhost"; // MySQL server address
$port = "3307"; // MySQL server port number
$user = "root"; // MySQL database username
$password = ""; // MySQL database password
$dbname = "newsportal"; // MySQL database name

$con = mysqli_connect($host, $user, $password,$dbname,$port);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>