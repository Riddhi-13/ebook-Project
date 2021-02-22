<?php
  include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The Book Biz - eBook Reading website</title>
	
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>

	<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>


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
	.dropdown {
		position: relative;
  		display: inline-block;
	}

	.dropdown-content {
 		 display: none;
 		 position: absolute;
  		 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  		 padding: 12px 16px;
  		z-index: 1;
	}
	.dropdown-content a:hover {background-color: purple; color:white}

	.dropdown:hover .dropdown-content {
		  display: block;
	}
	 .example{
	margin-right:5px;
	}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

	@media all and (min-width: 992px) {
		.navbar{ padding-top: 0; padding-bottom: 0; }
		.navbar .nav-link{ padding-top:1rem; padding-bottom:1rem;  }
	}
</style>
</head>
<body>
<?php

	class Categories extends Dbh
	{
		protected function getAllCategories(){
			$sql="select distinct(category) from books";
			$result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows>0){
				while ($row=$result->fetch_assoc()) {
					$data[]=$row;
				}
				return $data;
			}
		}
		public function showCategories(){
			$datas=$this->getAllCategories();
			foreach ($datas as $data) {
			echo "<li><a class='dropdown-item' href='#'>".$data['category']."</a></li>";
			}
		}
	}

	$cat=new Categories();
	
?>
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
     <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Browse</a>
        <ul class="dropdown-menu dropdown-menu-right dropdown-content">
       	<?php
       		$cat->showCategories();
       	?>	 
        </ul>
    </li>
      <li class="nav-item">
        <a class="nav-link pr-4" href="#">About</a>
      </li>

    </ul>
	<form class="example" action="/action_page.php" style="max-width:300px">
	  <input type="text" placeholder="Search.." name="search2">
	  <button type="submit"><i class="fa fa-search"></i></button>
	</form>
     <form class="form-inline ml-auto">
		
     	<a href="login.html" class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size"> <i class="fas fa-user" style="color:#fff;"></i> Log in</a>
  </form>

  </div>
</nav>