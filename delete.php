<?php

include 'connection.php';

$id = $_REQUEST['pages_id'];

$delete = "DELETE FROM pages WHERE pages_id = $id";

$result = mysqli_query($connect, $delete);

header("location: all_page.php");

?>