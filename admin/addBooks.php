

<!DOCTYPE html>
<html>
<head>
	<title>update book</title>
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
	  	
	  		div.right {
	  			float:right;
				margin-top:-80px;
				margin-right:70px;
				
	  		}
			div.left{
				float:right;
				margin-top:-75px;
				margin-right:350px;
				width:15%;
			}
			div.upload{
				float:right;
				margin-top:-80px;
				margin-left:200px;
			}
			div.butt{
				margin:0px auto;
				width:40%;
				
			}
			#pub_name{
				width:75%;
				
				
			}
			
			#category{
				width:30%;
			}
			
			
			.form-group{
				display:block;
			}
	  </style>
</head>
<body>
	<div class="container">

		<center><h2>Add a new Book</h2></center>
		<form  action="addBooksResult.php" method="post" enctype="multipart/form-data">
	
		<label for="book_name">Book Name:</label>
		<input type="text" class="form-control" id="book_name" name="book_name" value="" required><br>
		<label for="author">Author:</label>
		<input type="text" class="form-control" id="author" name="author" value="" required><br>
		<label for="pub_name">Publisher Name:</label>
		<input type="text" class="form-control" id="pub_name" name="pub_name" value="" required><br>
		<div class="right" style="width:15%;">
		<label for="edition">Edition:</label>
		<input type="number" class="form-control" id="edition" name="edition" value="" min="1" max="10"><br>
		</div>
		<div class="form-group">
			<label for="description">Description:</label>
			<textarea class="form-control" id="description" rows="4" name="description" required> </textarea>
		</div>
		<div class="form-group">
			<label for="category">Category</label>
			<select class="form-control" id="category" name="category">
			  <option>Educational books</option>
			  <option>Self development books</option>
			  <option>Horror</option>
			  <option>Fantasy books</option>
			  <option>Science Fiction</option>
			  <option>Motivational</option>
			  <option>Romance</option>
			</select>	
		</div>

		<div class="left">
		<label for="year">Year:</label>
		<input type="number" class="form-control" id="year" name="year"  min="1850" max="2021" value="" required><br>
		</div>
		<div class="upload">
		
			<label for="img_upload">Image (.jpg/.jpeg)*</label>
			<input type="file" class="form-control-file" id="img_upload" name="image" required>
		
		</div>
		<div class="butt">
		<input name="add" type="submit" class="btn btn-primary" style="padding: 5px 50px;font-size:18px;" value="ADD BOOK" name="submit">
		<input type="reset" class="btn btn-primary" style="padding: 5px 50px;font-size:18px;" value="RESET" name="submit">
		<div>
	</div>
	</form> 
	</div>
	
</body>
</html>
