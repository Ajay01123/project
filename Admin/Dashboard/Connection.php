<?php
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






