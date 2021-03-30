
<?php 
include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>all book</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <style type="text/css">
	  		.container {
	  			margin: 50px auto;
	  			width: 90%;
	  			background-color: Lavender;
	  		}
	  		.container2 {
	  			margin: 50px;
	  		}
	  		div.left {
	  			display: inline-block;
	  		}
	  		div.right {
	  			display: inline-block;
	  			top: 0px;
	  			position: absolute;
	  			right: 50px;
	  		}
	  		.check {
	  			position: relative;
	  			width: 90%;
	  			margin: 2px auto;
	  		}
	  </style>
</head>
<body>
	<div class="container">
	<form method="post">
	<label for="isbnNo">ISBN No:</label><br>
  <input type="text" id="isbnNo" name="isbnNo" value="isbnNo"><br>
  <label for="bookName">Book Name</label><br>
  <input type="text" id="bookName" name="bookName" value="bookName">
		
<?php

			
			$q="delete from books where book_name= "
			
			
			
		
			
	
	

?>
<center><input type="submit" class="btn btn-primary" value="delete" name="delete" style="padding: 5px 50px;"></center>
		<br>
		</form>
		</div>
		</body>
		</html>