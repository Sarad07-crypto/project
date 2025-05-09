<?php
$servernam = "localhost:3307";
$username = "root";
$password = "";
$dn_name = "login_info";
try {
    $conne = mysqli_connect($servernam, $username, $password, $dn_name);
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}

if ($conne) {
    echo "connection is stablished";
} else {
    echo "connection is not stablished" . mysqli_connect_error();
}



?>