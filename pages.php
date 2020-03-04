<?php

include   'connection.php ';

$pagetitle = $_POST['pagetitle'];
$pagecontent = $_POST['pagecontent'];

$insert = "INSERT INTO pages(pages_title, pages_des) 
		      VALUES('$pagetitle', '$pagecontent')";


?>
<!DOCTYPE html>
<head>
<title>Create Page</title>
</head>

<body>


<div class="container">

<h1>Page Result</h1>


					<?php 
							if(mysqli_query($connect,$insert)){
							echo '<h3> Your Record has been saved</h3>';
							}else{
							echo   '<b>there is an error</b>';
					}
?>

			<div class="row">
						<div class="col"><a href="all_page.php" >All Pages</a></div>
						<div class="col"><a href="create_page.php" >Create New Page</a></div>
			</div>
		</div>
</body>
</html>
		
		
		