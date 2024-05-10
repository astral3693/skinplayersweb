<?php

include "config.php";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

 
$steamid = $_GET['steamid'];
$t_model =  $_GET['t_model'];
$ct_model =  $_GET['ct_model'];
$t_permission_bypass = 0;
$ct_permission_bypass = 0;


if ($steamid != ''){
$sql = "UPDATE playermodelchanger SET t_model='$t_model',ct_model='$ct_model' WHERE steamid=$steamid";
if ($conn->query($sql) === TRUE) {
    $rs = "Registration Updated Successfully";
} else {
    $rs = "Error updating the registry:" . $conn->error;
}

$conn->close();
} else {
	 $rs = "Connect Success CSGO";
}



header("Location: index.php?id=$steamid&rs=$rs&t_model=$t_model&ct_model=$ct_model");
//exit;


?>