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
					$target_image_file = $target_dir . basename($_FILES["image"]["name"]);
					$imageFileType = strtolower(pathinfo($target_image_file,PATHINFO_EXTENSION));
					$tmpImageFile=$_FILES["image"]["tmp_name"];
					$imageFileName= htmlspecialchars( basename( $_FILES["image"]["name"]));
					$check = getimagesize($tmpImageFile);
					if($check !== false) {
						$uploadOk = 1;
					} else {
						echo "<br><br>File for book image is not an image.";
						$uploadOk = 0;
					}
					if (file_exists($target_image_file)) {
						echo "<br><br>The file ".$imageFileName." for book image already exists.";
						$uploadOk = 0;
					}
					if($imageFileType != "jpg" && $imageFileType != "jpeg") {
						echo "<br><br>Sorry, only JPG, JPEG files are allowed for book image.";
						$uploadOk = 0;
					} 
				}
				elseif ($value=="pdf_name") {
					$target_dir = "../books_pdfs/";
					$target_file = $target_dir . basename($_FILES["pdf_name"]["name"]);
					$pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					$tmpPdfFile=$_FILES["pdf_name"]["tmp_name"];
					$pdfFileName= htmlspecialchars( basename( $_FILES["pdf_name"]["name"]));
					if (file_exists($target_file)) {
					  echo "<br><br>Sorry, the file ".$pdfFileName." for book pdf file already exists.";
					  $uploadOk = 0;
					}
					if($pdfFileType != "pdf") {
					  echo "<br><br>Sorry, only PDF files are allowed for book pdf.";
					  $uploadOk = 0;
					}
				}	
				}
			
			foreach ($fields as $key => $value) {
				
				if($value!=="image" and $value!=="pdf_name" and $uploadOk==1){
					$column=$_POST[$value];
					$sql2="update books set ".$value."='".$column."' where ISBN_no=".$id.";";
					$result=$this->connect()->query($sql2);
					echo $value." updated successfully..<br><br>";
				}
				elseif ($value=="image" and $uploadOk==1) {
					if (move_uploaded_file($tmpImageFile, $target_image_file)) {
					    $sql3="update books set ".$value."='".$imageFileName."' where ISBN_no=".$id.";";
					    $result=$this->connect()->query($sql3);
						echo "The file ".$imageFileName. " has been uploaded.<br><br>";
						
					  } else {
					    echo "Sorry, there was an error uploading your file.";
					  }
				}
				elseif ($value=="pdf_name" and $uploadOk==1) {
					if (move_uploaded_file($tmpPdfFile, $target_file)) {
					    $sql4="update books set ".$value."='".$pdfFileName."' where ISBN_no=".$id.";";
					    $result=$this->connect()->query($sql4);
						echo "The file ".$pdfFileName. " has been uploaded.<br><br>";
						
					  } else {
					    echo "Sorry, there was an error uploading your file.";
					  }
				}
				elseif ($value!=="pdf_name" and $uploadOk==1) {
					update($sql4,$pdfFileName);
				}
			}
			if ($uploadOk==1) {
				echo '<br><br><a href="updateBooks.php">OK</a>';
			}
			else{
				echo '<br><br>Sorry, the changes were not updated.';
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