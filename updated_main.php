<?php
	include 'browse.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Book Biz - eBook Reading website</title>
	
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />


	<style type="text/css">
	
	.navbar-custom{

			background-color: #25003e /*#00CED1*/;
			/*opacity: 0.5;*/
	
	}
	.nav-link{
		color: black;
		font-size: 18px;

	}
	.font-size{
		font-size: 18px;
	}
	.card {
float: left;
height:350px;
}
	.item {
float: left;

}
.myDiv {
  border: 5px outset red;
  background-color: lightblue;
</style>
</head>
<body>



<?php

  class CatBooks extends Dbh
	{
		protected function getAllBooks($sql){
			
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				while ($row=$result->fetch_assoc()) {
					
					echo '<div id="item">';
					$data[]=$row;
            echo '</div>';
				}
				return $data;
			}
		}
		public function showBooks(){
			
			$sql="select * from books where category='Motivational'";
			$datas=$this->getAllBooks($sql);
			echo '<section class="my-5">';
			echo '<div  class="py-5">';
			echo '<h1 class="text-center">Motivational</h1>';
			echo '</div>';

			//echo '<div style=" background-color: Turquoise;padding: 12px;color: Indigo;"><center><h2 style="font-weight:bold;">'.$cat.'</h2><p style="font-weight:bold;">~ O ~</p></center></div>';
			//echo '<div style="margin: 20px;">';
			foreach ($datas as $data) {

echo '<div class="row">';
		
		//echo '<div class="col-lg-2 col-md-2 col-2">';
			
			echo '<div class="card " style="margin-left:50px;margin-right:20px">';
			 echo '<img src="books_images/'.$data['image'].'" alt="" height="300px" />';
		
			 echo '<h6>'.$data['book_name'].'</h6>';
			 //echo '<center><a href="view.php class="btn btn-primary">view</a></center>';
			 echo '<a href="viewPdf.php?id='.$data['ISBN_no'].'" class="btn btn-primary">Read now</a></center>';
			//echo '<center><a href="read.php" class="btn btn-primary">read now</a></center>';
			

			
			echo '</div>';
			
		//echo '</div>';
		
	
       }
	}
	
		
	
  }
	$catBks=new CatBooks();
	$catBks->showBooks();
	
?>



</body>
</html>