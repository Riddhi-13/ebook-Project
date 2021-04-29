<?php
	include 'header.php';
?>
<head>
 <style type="text/css">
	 body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 30px;
  margin-left: 150px;
  
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
   height:370px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  height: 300px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
	 
	 
	 
	  		.container1 {
	  			margin: 30px auto;
	  			width: 50%;
	  			background-color: LightGray	;
				padding:20px;
	  		}
			
			.cont {
	  			margin: 30px auto;
	  			width: 100%;
	  			background-color: DimGray;
				padding:20px;
	  		}
	  	
	  
	  </style>
</head>
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
<div class="about-section">
  <h1>About Us </h1>
  <p>We are a group of four people who love to develop websites.</p>
  <p>Our website book biz is all about books where you will finds books from different genre and you can read them online and read offline by downloading the pdfs. The books are absolutely free you don't have to pay asingle penny to read. You can also add books to your library to read later. It is very easy to navigate through the website. And if any difficulty don't hesitate to contact us. We are eveready to help you out . Do give us your feedback in the form given below. Hope you enjoy reding the books</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <center><img src="images/c1.jpg" alt="Ridhi" style="width:30%" ></center>
      <div class="container">
        <h2>Ridhi Dessai</h2>
        <p class="title">CEO & Founder</p>
        <p>Front end and backend developer</p>
        <p>ridhi05@gmail.com</p>
      
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <center><img src="images/c4.jpg" alt="tanvi" style="width:30%"></center>
      <div class="container">
        <h2>Tanvi Nayak</h2>
        <p class="title">Art Director</p>
        <p>Front end designer</p>
        <p>tanvi06@gmail.com</p>
        
      </div>
    </div>
  </div>
  </div>
  
  <div class="row">
  <div class="column">
    <div class="card">
      <center><img src="images/c3.jpg" alt="doisy" style="width:30%"></center>
      <div class="container">
        <h2>Doisy Dias</h2>
        <p class="title">Designer</p>
        <p>Front end designer.</p>
        <p>doisy09@gmail.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <center><img src="images/c2.jpg" alt="priya" style="width:30%"></center>
      <div class="container">
        <h2>Priya Majeliker</h2>
        <p class="title">Designer</p>
        <p>Front end and backend developer.</p>
        <p>priya@gmail.com</p>
        
      </div>
    </div>
  </div>
</div>
</div>

<div class="cont">
	<div class="container1">

		<center><h2>Give us your feedback</h2></center>
		<center>
		<form action="contact_process.php" method="post">
			<input type="text" name="name" placeholder="User Name" class="form-control mb-2" value="" required>
			<div class="error">
									<?php if(!empty($data['name_error'])): ?>
									  <?php echo $data['name_error']; ?>
									<?php endif; ?>
							  </div><br>
			<input type="email" name="email" placeholder="Email" class="form-control mb-2" value="" required>								<div class="error">
									<?php if(!empty($data['email_error'])): ?>
									  <?php echo $data['email_error']; ?>
									<?php endif; ?>
							  </div><br>
			<input type="text" name="subject" placeholder="subject" class="form-control mb-2" value="" required>								<div class="error">
									<?php if(!empty($data['subject_error'])): ?>
									  <?php echo $data['subject_error']; ?>
									<?php endif; ?>
							  </div><br>
			<textarea name="msg" class="form-control" placeholder="write your message!"  value="" required></textarea>
											<div class="error">
									<?php if(!empty($data['msg_error'])): ?>
									  <?php echo $data['msg_error']; ?>
									<?php endif; ?>
							  </div><br>
			<center><button class="btn btn-success" name="btn-send">submit</button></center>
		
	</form>
</center>	
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