<?php
	include 'dbh.inc.php';
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
	.item {
float: left;
}
.myDiv {
  border: 5px outset red;
  background-color: lightblue;
</style>
</head>
<body>


<nav class="navbar navbar-custom navbar-expand-md navbar-dark ">
 <span class="navbar-brand mb-0 h1 pl-5"><i class="fas fa-book-reader"></i> The Book Biz</span>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link pr-4" href="index.html">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-4" href="#">About</a>
      </li>

    </ul>
	
     <form class="form-inline ml-auto">
		
     	<a href="login.html" class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size"> <i class="fas fa-user" style="color:#fff;"></i> Log in</a>
     	<!--<a href="my_library.html"  class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size" > <i class="fas fa-shopping-cart" style="color:#fff;"></i><span id="cart_item" class="badge badge-danger"></span></a> -->
  </form>

  </div>
</nav>

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
			echo '<h1 class="text-center">best Sellers</h1>';
			echo '</div>';

			//echo '<div style=" background-color: Turquoise;padding: 12px;color: Indigo;"><center><h2 style="font-weight:bold;">'.$cat.'</h2><p style="font-weight:bold;">~ O ~</p></center></div>';
			//echo '<div style="margin: 20px;">';
			foreach ($datas as $data) {
?>
 
<section class="my-5">

	
<div class="container-fluid">
<div class="row">
		
		 <div class="col-lg-2 col-md-2 col-2">
			<?php 
			echo '<div class="card">';
			 echo '<img class="card-img-top" src="books_images/'.$data['image'].'" alt="" height="300px" />';
			 echo '<div class="card-body">';
			 echo '<h6 class="card-title">'.$data['book_name'].'</h6>';
			 echo '<p class="card-text"><h6>Volume 1 of the series <a href="view.php">view more</a></h6></p>';
			echo '<center><a href="read.php" class="btn btn-primary">read now</a></center>';
			

			
			echo '</div>';
			
		echo '</div>';
		?>
</div>
		
		
</div>
</div>	<?php	
       }
	}
  }
	$catBks=new CatBooks();
	$catBks->showBooks();
?>

<?php
  
  class Cat_Books extends Dbh
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
			
			$sql="select * from books where category='romance'";
			$datas=$this->getAllBooks($sql);
			echo '<section class="my-5">';
			echo '<div  class="py-5">';
			echo '<h1 class="text-center">best Sellers</h1>';
			echo '</div>';

			//echo '<div style=" background-color: Turquoise;padding: 12px;color: Indigo;"><center><h2 style="font-weight:bold;">'.$cat.'</h2><p style="font-weight:bold;">~ O ~</p></center></div>';
			//echo '<div style="margin: 20px;">';
			foreach ($datas as $data) {
?>
 
<section class="my-5">

	
<div class="container-fluid">
<div class="row">
		
		 <div class="col-lg-2 col-md-2 col-2">
			<?php 
			echo '<div class="card">';
			 echo '<img class="card-img-top" src="books_images/'.$data['image'].'" alt="" height="300px" />';
			 echo '<div class="card-body">';
			 echo '<h6 class="card-title">'.$data['book_name'].'</h6>';
			 echo '<p class="card-text"><h6>Volume 1 of the series <a href="view.php">view more</a></h6></p>';
			echo '<center><a href="read.php" class="btn btn-primary">read now</a></center>';
			

			
			echo '</div>';
			
		echo '</div>';
		?>
</div>
		
		
</div>
</div>	<?php	
       }
	}
  }
	$catBks=new Cat_Books();
	$catBks->showBooks();
?>
</section>
</body>
</html>