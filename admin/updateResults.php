<!DOCTYPE html>
<html>
<head>
	<title>Update Results</title>
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
	include '../dbh.inc.php';
	/**
	 * 
	 */
	class updateBook extends Dbh
	{
		public function updateBkDetails($fields,$id)
		{
			echo '<div class="container"><center>';
			$uploadOk=1;
			foreach ($fields as $key => $value) {
				
				if($value=="image"){
					$target_dir = "../books_images/";
					$target_file = $target_dir . basename($_FILES["image"]["name"]);
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					$check = getimagesize($_FILES["image"]["tmp_name"]);
					if($check !== false) {
						$uploadOk = 1;
					} else {
						echo "File is not an image.";
						$uploadOk = 0;
					}
					if (file_exists($target_file)) {
						echo "The file ".htmlspecialchars( basename( $_FILES["image"]["name"]))." already exists.";
						$uploadOk = 0;
					}
					if($imageFileType != "jpg" && $imageFileType != "jpeg") {
						echo "Sorry, only JPG, JPEG files are allowed.";
						$uploadOk = 0;
					}
					if ($uploadOk == 0) {
						echo "<br><br>Sorry, your file was not uploaded.";
					} 
					else {
						if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
							$fileName= htmlspecialchars( basename( $_FILES["image"]["name"]));
							echo "The file ".$fileName. " has been uploaded.<br><br>";
							$sql3="update books set ".$value."='".$fileName."' where ISBN_no=".$id.";";
							$result=$this->connect()->query($sql3);
						} else {
							echo "Sorry, there was an error uploading your file.";
						}
					}
				}
			}
			foreach ($fields as $key => $value) {
				
				if($value!=="image" and $uploadOk==1){
					$column=$_POST[$value];
					$sql2="update books set ".$value."='".$column."' where ISBN_no=".$id.";";
					$result=$this->connect()->query($sql2);
					echo $value." updated successfully..<br><br>";
				}
			}
			if ($uploadOk==1) {
				echo '<br><br><a href="updateBooks.php">OK</a>';
			}
			else{
				echo '<br><br><a href="updateBooks.php">Back</a>';
			}
			
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