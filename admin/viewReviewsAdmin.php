<?php
	include '../dbh.inc.php';
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
        <a class="nav-link pr-4" href="admin_main.php">Home </a>
      </li>
     <!-- <li class="nav-item">
        <a class="nav-link pr-4" href="#">About</a>
      </li> -->

    </ul>
	<form class="example" action="search.php" method="POST" >
	  <input type="text" placeholder="Search by book name, author...." name="search" required>
	  <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
	</form>
    <!--<form class="form-inline ml-auto">-->
		
     	<!--<a href="login.php" class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size"> <i class="fas fa-user" style="color:#fff;"></i> Log in</a>-->
     	<!--<a href="my_library.html"  class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size" > <i class="fas fa-shopping-cart" style="color:#fff;"></i><span id="cart_item" class="badge badge-danger"></span></a> -->
  <!--</form>-->

  </div>
</nav>

<?php
//include '../dbh.inc.php';
class Reviews extends Dbh
	{
		public function getBookDetails($id){
			$sql="select * from books where ISBN_no=".$id.";";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				return $result->fetch_assoc();
			}
		}
		public function viewReviews($id){
			$sql="select * from reviews where ISBN_no=".$id.";";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				while ($row=$result->fetch_assoc()) {
					$rv[]=$row;
				}
				return $rv;
			}
			else
				return false;
		}
		public function getReaderName($id){
			$sql="select * from reader where id=".$id.";";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				return $result->fetch_assoc();
			}
		}
		
	}
	$id= $_REQUEST['id'];
	$bk=new Reviews();
	$data=$bk->getBookDetails($id);
	$readerReviews=$bk->viewReviews($id);
?>
<div style="padding: 20px; min-height: 570px;margin-bottom:10px;margin-left: 100px;margin-right: 100px;margin-top: 30px;box-shadow: 2px 4px 12px #888888;background-color:Linen;">
	
	<?php
		echo '<img src="../books_images/'.$data['image'].'" alt="book" width="150px" height="200px" style="border: 1px solid;margin-left:4px;display: inline;" />'; 
		echo '<div style="display: inline;padding: 5px;position:absolute;margin-left: 10px;margin-top: 2px;background-color: snow;border-radius:15px;width: 70%;height: 200px;">';
		echo '<h3 style="color: MediumSeaGreen;margin-top: 2px;">'.$data['book_name'].'</h3>';
		echo '<div style="font-weight:bold;">Author:'.$data['author'].'</div><br><div style="font-size:smaller;">Description:'.$data['description'].'</div><br></div>';
		echo '<div style="margin-left: 8px;width: 81%;margin-top: 0px;position: absolute;min-height:400px;">';
		echo '<h4 style="margin: 10px;">READERS REVIEWS</h4><hr>';
		if($readerReviews!=false){
			foreach ($readerReviews as $revs) {
				$name=$bk->getReaderName($revs['id']);
				echo '<div style="background-color: MediumAquaMarine;margin-top:10px;padding:10px;border-radius: 15px;">';
				echo '<div style="font-weight:bold;">'.$name['name'].'</div><br>';
				echo '<div>'.$revs['review'].'</div>';
				echo '</div>';
			}
		}
		echo '</div>';
	?>
</div>
</body>
</html>