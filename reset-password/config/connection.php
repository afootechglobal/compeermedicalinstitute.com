<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
header("Access-Control-Allow-Origin");  /// to call API



//database confiquration
$main_server = "localhost";
$server_username = "root";
$server_password = "";

// Create connection
$conn = mysqli_connect($main_server, $server_username, $server_password) or die("connection error");
mysqli_select_db($conn, "s_software_db");//// database name -- yooga_db
?>








