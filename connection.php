<?php



$db_name="php";
$db_user="root";
$db_pass="";
$db_host="localhost";

$connect= new mysqli($db_host,$db_user,$db_pass,$db_name);


if($connect->connect_error){ die('db not connected');
}else {
echo "db connect";
}


?>