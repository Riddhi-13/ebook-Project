<?php
	
	include 'dbh.inc.php';
	//include 'db.php';
?>
<!DOCTYPE html>
<html>
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
  padding: 8px;
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
        <a class="nav-link pr-4" href="index.html">Home </a>
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
		<?php if((isset($_SESSION["id"]))==false){ ?>
     	<a href="login.php" class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size"> <i class="fas fa-user" style="color:#fff;"></i> Log in</a>
		<?php } ?>
     
     	<!--<a href="my_library.html"  class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size" > <i class="fas fa-shopping-cart" style="color:#fff;"></i><span id="cart_item" class="badge badge-danger"></span></a> -->
  </form>

  </div>
</nav>
