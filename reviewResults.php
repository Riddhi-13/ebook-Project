<!DOCTYPE html>
<html>
<head>
	<title>review results</title>
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
		/**
		 * 
		 */
		include 'dbh.inc.php';
		session_start();
		class ReviewResults extends Dbh
		{
			
			public function addReview($bookId,$review)
			{
				if((isset($_SESSION["id"]))){
					$readerId=$_SESSION["id"];
					$sql='insert into reviews values('.$readerId.','.$bookId.',"'.$review.'");';
					$result=$this->connect()->query($sql);
				}
			}
		}
		
		if (isset($_POST['submit'])) {
			$id=$_POST['id'];
			$review=$_POST['review'];
			$rv=new ReviewResults();
			$rv->addReview($id,$review);
			echo '<div class="container">';
			echo "<center>Review added successfully!!";
			echo '<br><br><a href="updated_main.php">OK</a></center>';
			echo '</div>';
		}
	?>


</body>
</html>