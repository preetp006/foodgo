<?php

$servername = "localhost";
$usernamedb = "root";
$passworddb = "";
$dbname1 = "sample";

$db = mysqli_connect($servername,$usernamedb,$passworddb,$dbname1);

if($db) {
    echo "Connection OK";
}
else {
    echo "Connection failed";
}

?>

