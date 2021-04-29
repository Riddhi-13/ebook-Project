<?php
	include 'dbh.inc.php';
?>
<head>
	<title>The Book Biz - eBook Reading website</title>
	
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
  // jQuery code

  //////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
      $('.dropdown-menu a').click(function(e){
        e.preventDefault();
          if($(this).next('.submenu').length){
            $(this).next('.submenu').toggle();
          }
          $('.dropdown').on('hide.bs.dropdown', function () {
         $(this).find('.submenu').hide();
      })
      });
  }
  
}); // jquery end
</script> 

	<style type="text/css">
	.carousel-caption {
position:absolute;
top:50%;
transform: translateY(-80);
left: 8%;

	}
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

  .example{
	  margin-top:5px;
	margin-right:5px;
	width:50%;
	
	}

form.example input[type=text] {
  padding: 9px;
  font-size: 15px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 12px;
  background: #bb36fd;
  color: white;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
    background: linear-gradient(45deg, #c85bff, #b726ff);
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
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
        <a class="nav-link pr-4" href="index.php">Home </a>
      </li>
     <!-- <li class="nav-item">
        <a class="nav-link pr-4" href="#">About</a>
      </li> -->

    </ul>
	<form class="example" action="search.php" method="POST" >
	  <input type="text" placeholder="Search by book name, author...." name="search" required>
	  <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
	</form>
     <form class="form-inline ml-auto">
		
     	<a href="login.php" class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size"> <i class="fas fa-user" style="color:#fff;"></i> Log in</a>
     	<!--<a href="my_library.html"  class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size" > <i class="fas fa-shopping-cart" style="color:#fff;"></i><span id="cart_item" class="badge badge-danger"></span></a> -->
		<a href="library.php"  class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size" ><i class="fa fa-book" aria-hidden="true" style="color:#fff"></i><span id="cart_item" class="badge badge-danger"></span> Library</a>
  </form>

  </div>
</nav>
<div>
<?php 	
	if(isset($_POST['submit-search'])){
		$search = $_POST['search'];
		$sql="SELECT * FROM books WHERE book_name LIKE '%$search%' OR author LIKE '%$search%'"; 
		class Search extends Dbh
	{
		protected function getAllBooks($sql){
			          
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				while ($row=$result->fetch_assoc()) {
					$data[]=$row;
				}
				return $data;
			}
		}
		public function showSearchedBooks($sql){
			$datas=$this->getAllBooks($sql);
			if($datas>0){
			
			foreach ($datas as $data) {
				
			//echo "<li><a class='dropdown-item' href='displayBooks.php?category=".$data['category']."'>".$data['category']."</a></li>";
			// echo "<h3>".$data['author']."</<h3>
					  // <h3>".$data['book_name']."</h3>";
					
		?>	
	<div style="padding: 20px; height: 370px;margin-left: 100px;margin-right: 100px;margin-top: 30px;box-shadow: 2px 4px 12px #888888;">
	<?php
		echo '<img src="books_images/'.$data['image'].'" alt="book" width="220px" height="290px" style="margin-left:50px;display: inline;float: left;" />';
		echo '';
  		echo '<div style="display: inline;float:left;margin-left: 20px;width: 72%;"><h4 style="font-weight:bold;">'.$data['book_name'].'</h4>';
  		echo '<p style="font-size: 15px;"><b>Author:</b> '.$data['author'].'</p>';
  		echo '<p style="font-size: 15px;"><b>Edition:</b> '.$data['edition'].'</p>';
  		echo '<p style="font-size: 15px;"><b>Year of publication:</b> '.$data['year_of_publication'].'</p>';
  		echo '<p style="font-size: 15px;"><b>Publisher Name:</b> '.$data['publisher_name'].'</p>';
    	echo'<p style="font-size: 15px;">'.$data['description'].'</p>';
    	echo '<a href="login.php"><button class="btn btn-primary" style="display: inline; margin: 10px;">Start reading</button></a><button class="btn btn-primary" style="display: inline;margin: 10px;">Add to library</button><button class="btn btn-primary" style="display: inline;margin: 10px;">Download</button><a href="viewReviewsWithoutLogin.php?id='.$data['ISBN_no'].'"><button class="btn btn-primary" style="display: inline;margin: 10px;">Reviews</button></a></div>';
    	echo '</div>';
		  
				}
				
			}
			else{
					//echo "no book found";
					echo '<div class="container">';
					// echo '<div class="well">no book found</div>';
					 echo '<img src=images/not_found.png style="display:block;margin-left:auto;margin-right:auto">';
					echo '</div>';
				}
		}
	}

	$cat=new Search();
	$cat->showSearchedBooks($sql);
	}
	?>
</div>
