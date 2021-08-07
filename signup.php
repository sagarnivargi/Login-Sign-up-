<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up </title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class ="login-page">
        <div class = "form">
            <div class="header">
                <h2>Sign up</h2>
            </div>
            <form class="login-form" method = "post" action="signup.php">
                <?php include('errors.php'); ?>
                <div class ="login-form">
                    <input placeholder="Username" type="text" name = "username" value = "<?php echo $username; ?>">
                </div>   
                <div class ="login-form">
                    <input placeholder="Email" type="email" name = "email" value = "<?php echo $email; ?>">
                </div>
                <div class ="login-form">
                    <input placeholder="Password" type="password" name = "password_1">
                </div>   
                <div class ="login-form">
                    <input placeholder="Confirm Password" type="password" name = "password_2">
                </div>
                <div class="login-form">
  	                <button type="submit" class="btn" name="reg_user">Register</button>
  	            </div>

				<div class="login-form">  
				  <div class="login-or">
                                <hr class="hr-or">
                                <span class="span-or">or</span>
                	</div>
				</div>
                		 
                <p>Already a member? <a href ="login.php">Log In here</a></p>  
            </form>
        </div>
    </div>
</body>
</html>