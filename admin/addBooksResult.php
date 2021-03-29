<?php
include '../dbh.inc.php';

/*
 * 
 */
class addBook extends Dbh{
	
public function addBkDetails(){
	$upload=1;
	if(isset($_POST["add"]))
		{
			echo '<div class="container"><center>';
			$bk_name=$_POST["book_name"];
			$author=$_POST["author"];
			$publisher=$_POST["pub_name"];
			$edition=$_POST["edition"];
			$description=$_POST["description"];
			$category=$_POST["category"];
			$year=$_POST["year"];
			$image=$_FILES['image']['name'];
			
			$s="select * from books where book_name='$bk_name' and edition='$edition'";
			$result=$this->connect()->query($s);

			$num=mysqli_num_rows($result);
			if($num==1){
			   echo 'book already exist';
			}
			else{
				//image file directory
				
				$target= "../books_images/".basename($image);
				$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
				if (file_exists($target)) {
				  echo "Sorry, file already exists.Image cannot be uploaded";
				  
				}
				//allow files of jpg and jpeg
				else if($imageFileType != "jpg" && $imageFileType != "jpeg" ) {
				  echo "Sorry, only JPG & JPEG files are allowed.Couldnt upload the file";
				 
				}
		
				else{
				
					$reg= "insert into books(book_name,author,edition,publisher_name,year_of_publication,description,category,image) values('$bk_name','$author','$edition','$publisher','$year','$description','$category','$image')";
					$result=$this->connect()->query($reg);
					
					if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
						echo "Book added successfully";
					}else{
						echo "Failed to add book";
					}
				}
			}
			echo '<br><br><a href="addBooks.php">OK</a></center>';
			echo '</div>';
		}
		
  }
}
$addbk=new addBook();
$addbk->addBkDetails();
?>
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
