<?php
	include 'dbh.inc.php';
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
	<form class="example" action="search.php" method="POST" style="max-width:300px">
	  <input type="text" placeholder="Search by book name or author...." name="search">
	  <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
	</form>
     <form class="form-inline ml-auto">
		
     	<a href="login.html" class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size"> <i class="fas fa-user" style="color:#fff;"></i> Log in</a>
     	<!--<a href="my_library.html"  class="btn btn-sm  text-secondary font-weight-bold pr-5 font-size" > <i class="fas fa-shopping-cart" style="color:#fff;"></i><span id="cart_item" class="badge badge-danger"></span></a> -->
  </form>

  </div>
</nav>
<div style="margin-left:200px; margin-right:200px" >
<div class="mycarousel" style=" padding-top: 20px;">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ebook.jpg" class="d-block w-100" alt="..."  >
     
    </div>
    <div class="carousel-item">
      <img src="images/p2.jpg" class="d-block w-100" alt="..." style=" height: 550px;">
    
    </div>
    <div class="carousel-item">
      <img src="images/p1.jpg" class="d-block w-100" alt="..." style=" height: 550px;">
      
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

<script>
  // Prevent closing from click inside dropdown
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
 </script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>