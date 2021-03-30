<!DOCTYPE html>
<html>
<head>
	<title>update book</title>
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
		<center><h2>Update Book</h2></center>
		<form action="UpdateBookDetails.php" method="post">
		
		<label for="isbnNo">ISBN No:</label>
		<input type="number" class="form-control" id="isbnNo" name="isbnNo" value="" required><br>
		
		<hr>
		<div class="container2">
		<h4 style="text-align: center;">Choose the fields to update:<br></h4>
		<div class="check">
			<div class="left">
			<div class="checkbox">
				<input type="checkbox" id="bookName" name="fields[]" value="book_name">
			</div>
			<label for="bookName">Book Name</label>
			<div class="checkbox">
				<input type="checkbox" id="author" name="fields[]" value="author">
			</div>
			<label for="author">Author</label>
			<div class="checkbox">
				<input type="checkbox" id="edition" name="fields[]" value="edition">
			</div>
			<label for="edition">edition</label>
			<div class="checkbox">
				<input type="checkbox" id="publisherName" name="fields[]" value="publisher_name">
			</div>
			<label for="publisherName">Publisher Name</label>
			</div>
			<div class="right">
			<div class="checkbox">
				<input type="checkbox" id="publicationYear" name="fields[]" value="year_of_publication">
			</div>
			<label for="publicationYear">Publication Year</label>
			<div class="checkbox">
				<input type="checkbox" id="description" name="fields[]" value="description">
			</div>
			<label for="description">Description</label>
			<div class="checkbox">
				<input type="checkbox" id="image" name="fields[]" value="image">
			</div>
			<label for="image">Image</label><br>
			<div class="checkbox">
				<input type="checkbox" id="pdf_name" name="fields[]" value="pdf_name">
			</div>
			<label for="pdf_name">Pdf File</label><br>
			</div>
		</div>
		<br>
		<center><input type="submit" class="btn btn-primary" style="padding: 5px 50px;" value="Next" name="submit"></center>
		</div>
	</form> 
	</div>

</body>
</html>
