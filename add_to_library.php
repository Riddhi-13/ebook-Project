<?php
	include 'browse.php';
	class add_library extends Dbh{
		public function addToLibrary($isbn){
		
				$userid=$_SESSION['id'];
				$sqlc = "Select * from library where isbn_no='$isbn' and userid='$userid'";
				$result=$this->connect()->query($sqlc);
				
				$sql2="select category from books where ISBN_no='$isbn'";
				$result2=$this->connect()->query($sql2);
				$num1=mysqli_num_rows($result2);
				// if($num1==1){
					
					// $row=$result->fetch_assoc();

				// }
	
				$num=mysqli_num_rows($result);
				if($num==1){
				   echo"<script> alert('book already exist in the library');window.location.href='library.php';</script>";
				   
				}
				else{
					$s = "INSERT INTO `library` (`userid`, `isbn_no`) VALUES ('$userid', '$isbn');";
					$result=$this->connect()->query($s);
				//	echo "<script> alert('book saved in library');window.location.href='displayBooks.php?category='".$row['category']."'';</script>";
					echo "<script> alert('book saved in library');window.location.href='library.php';</script>";
				}
			
			}
		
	}
	$isbn= $_REQUEST['id'];
	$bk=new add_library();
	$data=$bk->addToLibrary($isbn);
?>
