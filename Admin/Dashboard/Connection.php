<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "hestabit";
$db="Project";
//Check Connection
$conn = new Mysqli($servername, $username, $password, $db);
if(!$conn){
 die ("Error on the Connection" . $conn->connect_error);
}

?>






