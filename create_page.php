

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Create Pages</title>
  </head>
  <body>
  <br>
		<div class="container">
			<form method="post" action="pages.php" >
							  <div class="form-group">
										<label for="exampleFormControlInput1">Page Title</label>
										<input type="text"  name="pagetitle" class="form-control" id="exampleFormControlInput1" placeholder="pagetitle">
							  </div>
							  <div class="form-group">
											<label for="exampleFormControlInput1">Page Content</label>
											<input type="text" name="pagecontent" class="form-control" id="exampleFormControlInput1" placeholder="pagecontent">
							  </div>
  
  
							  <div class="form-group">
											<label for="exampleFormControlTextarea1">Description</label>
											<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							  </div>
							  <div class="form-group">
										<button class="btn btn-danger" type="submit">Save</button>
							 </div>
</form>
         </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>