

<!DOCTYPE html>
<html>
<head>
	<title>Delete Books</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <style type="text/css">
	 
	  		.container {
	  			margin: 30px auto;
	  			width: 90%;
	  			background-color: Lavender;
				padding:20px;
	  		}
	  	
	
			div.butt{
				margin:0px auto;
				width:40%;
				text-align:center;
			}
			
			
	  </style>
</head>
<body>
	<div class="container">

		<center><h2>Delete a Book</h2></center>
		<form  action="deleteBooksResult.php" method="post">
	
		<label for="isbn">Book ISBN No:</label>
		<input type="number" class="form-control" id="isbn" name="isbn" value="" min="1000001" required><br>
		<label for="book_name">Book Name:</label>
		<input type="text" class="form-control" id="book_name" name="book_name" value="" required><br>
		<div class="butt">
			<input name="deletebk" type="submit" class="btn btn-primary" style="padding: 5px 50px;font-size:18px;" value="DELETE BOOK" name="submit">
		
		</div>
	</div>
	</form> 
	
	
</body>
</html>
