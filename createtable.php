<?php

include 'connection.php';

$pages="CREATE TABLE IF NOT EXISTS pages(
pages_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
pages_title VARCHAR(30),
pages_des TEXT)";


if(mysqli_query($connect,$pages)){
echo "<br>table created";
}else {
echo "table error";
}

?>