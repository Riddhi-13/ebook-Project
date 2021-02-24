<?php 
include "init.php";
if(isset($_SESSION['id'])){
  header("location:index.html");
}
if(isset($_POST['signup'])){
   
   $data = [
       'name'             => $_POST['name'],
       'email'            => $_POST['email'],
       'password'         => $_POST['password'],
      
       'name_error'       => '',
       'email_error'      => '',
       'password_error'   => ''
       


   ];
   

   /*
        * Name validation
   */ 
   if(empty($data['name'])){
    $data['name_error'] = "Name is required";
   } 
   

   /*
       * Email validation
   */ 
   if(empty($data['email'])){
    $data['email_error'] = "Email is required";
   } else {
    if($source->Query("SELECT * FROM reader WHERE email = ?", [$data['email']])){
      if($source->CountRows() > 0 ){
        $data['email_error'] = "Sorry email is already exist";
      }
    }
   }

   /*
        * Password validations
   */ 

   if(empty($data['password'])){
      $data['password_error'] = "Password is required";
   } else if(strlen($data['password']) < 5){
      $data['password_error'] = "Password is too short";
   }

  
 

   /*
        * Submit the form
   */ 

   if(empty($data['name_error']) && empty($data['email_error']) && empty($data['password_error']) ){
     $password= password_hash($data['password'], PASSWORD_DEFAULT);
     if($source->Query("INSERT INTO reader (name,email,password) VALUES (?,?,?)", [$data['name'], $data['email'], $password])){
     $_SESSION['account_created'] = "Your account is successfully created";
    header("location:index.html");
     }

   }



}


 ?>
 <!DOCTYPE html>
<head>
    <title>Sign Up Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="signup-boot.css">
</head>
<body> 
    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
                        <form class="myForm text-center"  action="register.php" method="post">
                            <header>Create new account</header>
                            
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="myInput" type="text" placeholder="Your Name" id="username" name="name" required> 
								<div class="error">
									<?php if(!empty($data['name_error'])): ?>
									  <?php echo $data['name_error']; ?>
									<?php endif; ?>
							  </div>
                            </div>

                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="myInput" placeholder="Email" type="email" id="email" name="email" required> 
								<div class="error">
									<?php if(!empty($data['email_error'])): ?>
									  <?php echo $data['email_error']; ?>
									<?php endif; ?>
							  </div>
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" name="password" id="password" placeholder="Password" required> 
								<div class="error">
									<?php if(!empty($data['password_error'])): ?>
									  <?php echo $data['password_error']; ?>
									<?php endif; ?>
								  </div>
                            </div>
                            
							 <input type="submit" name="signup" class="butt" value="CREATE ACCOUNT">
                            <p id=loginid>Already have an account?<a href="login.php">LOG IN</a></p>
                        </form>
                    </div>
                </div> 
                <div class="col-md-6 d-none d-md-block">
                    <div class="myRightCtn">
                        
                    </div>
                </div>
            </div>
        </div>
</div> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

