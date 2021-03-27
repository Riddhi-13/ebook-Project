<!DOCTYPE html>
<html>
<head>
	<title>updateBook</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.container {
	  			margin: 50px auto;
	  			width: 90%;
	  			background-color: Lavender;
	  			padding: 10px;
	  		}
		a:link, a:visited {
		  background-color: #f44336;
		  color: white;
		  padding: 14px 25px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-weight: bold;
		}

		a:hover, a:active {
		  background-color: red;
		}
	</style>
</head>
<body>
	<?php
	
	include 'dbh.inc.php';
	class BkDetails extends Dbh
	{
		public function getBkDetails($id)
		{
			$sql="select * from books where ISBN_no=".$id.";";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				return $result->fetch_assoc();
			}
			else{
				return 0;
			}
		}
		
	}
	
	if(isset($_POST['submit'])){
		if(!empty($_POST["fields"])){
		$fields=$_POST['fields'];
		$id=$_POST['isbnNo'];
		
		$bks=new BkDetails();
		$data=$bks->getBkDetails($id);
		if($data==0){
			echo '<div class="container">';
			echo "<center>Book with id=".$id." is not found in the database";
			echo '<br><br><a href="updateBooks.php">Back</a></center>';
			echo '</div>';
		}
		else{
?>
	<div class="container">
		<center><h2>Update Book Details</h2></center>
		<form method="post">
		<label for="isbnNo">ISBN No:</label>	
		<input type="number"  class="form-control" name="isbnNo" value="<?php echo $data['ISBN_no']; ?>" readonly><br>
		<label for="bookName">Book Name</label>
		<input type="text"  class="form-control" name="bkTitle" value="<?php echo $data['book_name']; ?>" readonly><br><hr><br>
		<?php foreach ($fields as $key => $value) { 
			echo '<label for="'.$value.'">'.$value.':</label>';
			if(strcmp($value,"description")==0){
				echo '<textarea id="description" class="form-control" name="description">'.$data[$value].'</textarea><br><br>';
			}
			elseif (strcmp($value,"year_of_publication")==0) {
				echo '<input type="number" min="1940" max="2021" class="form-control" name="'.$value.'" value="'.$data[$value].'"><br><br>';
			}
			elseif (strcmp($value,"edition")==0) {
				echo '<input type="number" class="form-control" name="'.$value.'" value="'.$data[$value].'"><br><br>';
			}
			else{
				echo '<input type="text"  class="form-control" name="'.$value.'" value="'.$data[$value].'"><br><br>';
			}
			
		} 
		foreach ($fields as $key => $value) {
			echo '<input type="hidden" name="fields[]" value="'.$value.'">';
		}
		
		?>
		<center><input type="submit" class="btn btn-primary" value="Update" name="update" style="padding: 5px 50px;"></center>
		<br>
		</form>
	</div>
<?php
	}
	}
	else
	{
		echo '<div class="container">';
		echo "<center>Please select atleast one field to update";
		echo '<br><br><a href="updateBooks.php">Back</a></center>';
		echo '</div>';
	}
}
class updateBook extends Dbh
	{
		public function updateBkDetails($fields,$id)
		{
			echo '<div class="container"><center>';
			foreach ($fields as $key => $value) {
				$column=$_POST[$value];
				$sql2="update books set ".$value."='".$column."' where ISBN_no=".$id.";";
				$result=$this->connect()->query($sql2);
				echo $value.' updated successfully..<br><br>';
				
			}
			echo '<br><br><a href="updateBooks.php">Back</a>';
			echo '</center></div>';
		}
	}
	if (isset($_POST['update'])) {
		$id=$_POST['isbnNo'];
		$fields=$_POST['fields'];
		$bkUpdate=new updateBook();
		$bkUpdate->updateBkDetails($fields,$id);
	}
?>

</body>
</html>