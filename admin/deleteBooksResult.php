<?php
include '../dbh.inc.php';

/*
 * 
 */
class deleteBook extends Dbh{
	
public function del_books(){

	if(isset($_POST["deletebk"]))
		{
			echo '<div class="container"><center>';
			$isbn=$_POST["isbn"];
			$book_name=$_POST["book_name"];

			
			$s="select * from books where ISBN_no='$isbn'";
			$result=$this->connect()->query($s);
			
			$num=mysqli_num_rows($result);
			if($num==1){
				$reg="delete from books where ISBN_no='$isbn'";
			   $result=$this->connect()->query($reg);
			   echo 'Book Deleted Successfully.';
			   
			}
			else{
				echo "The Book with ISBN NO = ".$isbn." does not exist";
				
			}
			echo '<br><br><a href="deleteBooks.php">OK</a></center>';
			echo '</div>';
		}
		
  }
}
$delbk=new deleteBook();
$delbk->del_books();
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
