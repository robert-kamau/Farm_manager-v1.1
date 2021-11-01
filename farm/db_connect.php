<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "kcf_db";

//create connection
$db_conn = new mysqli($severname, $username, $password, $database);

//check connection
if($db_conn->connect_error) {
    die("Database connection failed: ". $db_conn->connect_error);
}
echo "Connected Successfull";

?>