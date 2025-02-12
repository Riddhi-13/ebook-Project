<?php 
include_once 'init.php';
include 'header.php';
if(isset($_POST['login'])){

 $data = [
     'email'          => $_POST['email'],
     'password'       => $_POST['password'],
     'email_error'    => '',
     'password_error' => ''

 ];

 if(empty($data['email'])){
  $data['email_error'] = "Email is required";
 }

 if(empty($data['password'])){
  $data['password_error'] = "Password is required";
 }

 /*
     * Submit the login form
 */ 

 if(empty($data['email_error']) && empty($data['password_error'])){
  if($source->Query("SELECT * FROM reader WHERE email = ?", [$data['email']])){
    if($source->CountRows() > 0){
     $row = $source->Single();
     $id = $row->id;
     $db_password = $row->password;
     $name = $row->name;
	 $email=$row->email;
     if(password_verify($data['password'], $db_password)){

        $_SESSION['login_success'] = "Hi ".$name . " You are successfully login";
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
        if(($email=='priyamajalikar@gmail.com')||($email=='riddhidegvekar@gmail.com')||($email=='tanvidessai@gmail.com')||($email=='doisydias@gmail.com'))
        {
        	header("location:admin/admin_main.php");
        }
        else{
          header("location:updated_main.php");
        }
    } 
        else {
            $data['password_error'] = "Please enter correct password";
        }
    } else {
      $data['email_error'] = "Please enter correct email";
    }

  }
 }

}


 ?>
 
 <!DOCTYPE html>
<head>
    <title>Login Form </title>
  
    <link rel="stylesheet" href="signup-boot.css">
    
</head>

    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
					
                        <form class="myForm text-center"  action="login.php" method="post">
						<div class="group">
						<?php 
        
							if(isset($_SESSION['account_created'])):?>
							  <div class="success">
								<?php echo $_SESSION['account_created']; ?>
							  </div>
							<?php endif; ?>
							<?php unset($_SESSION['account_created']); ?>
							</div>
                            <header>LOG IN</header>
							
											  
                          
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="myInput" placeholder="Email" name="email" type="email" id="email" required > 
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
                        
                            <input type="submit" name="login" class="butt" value="LOG IN &rarr;">
                         
                            <p id=loginid>Dont have an account?<a href="register.php">SIGNUP</a></p>
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
 
</body>
</html>
