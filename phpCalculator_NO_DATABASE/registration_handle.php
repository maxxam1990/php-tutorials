<!DOCTYPE html>
<html>
	<head>
		<title>Max's Tax Calculator</title>	
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>

	<body>
		
	
	<div class="primary-content t-border">
	
		<form action="registration_handle.php" method="POST">
			 <h1 class="h1_form">Homework #2 - Registration Form Using Sticky Fields</h1>

			 <fieldset>
				<?php // Validate the first name:
					if (!empty($_REQUEST['firstname'])) {
						$firstname = $_REQUEST['firstname'];
					} else {
						$firstname = NULL;
						echo "<p class='p_error'>You forgot to enter your first name!</p>";
					}
				?>
				 <label for="firstname">First Name:</label>
				 <input type="text" id="firstname" name="firstname" value="<?php if (isset($_POST['firstname'])) echo ($_POST['firstname']); ?>">  
				 <?php
				 		// Validate the last name:
					if (!empty($_REQUEST['lastname'])) {
						$lastname = $_REQUEST['lastname'];
					} else {
						$lastname = NULL;
						echo "<p class='p_error'>You forgot to enter your last name!</p>";
					}				 
				 ?>
                 <label for="lastname">Last Name:</label>
				 <input type="text" id="lastname" name="lastname" value="<?php if (isset($_POST['lastname'])) echo ($_POST['lastname']); ?>">  
                 <?php 
						// Validate the gender:
					if (!empty($_REQUEST['gender'])) {
						$gender = $_REQUEST['gender']; 
					} else {
						$gender = NULL;
						echo "<p class='p_error'>You forgot to enter your gender!</p>";
					}				 
				 ?>								 
                 <label for="gender">Gender:</label> 
                 <input type="radio" id="gender" name="gender" value="<?php if (isset($_POST['gender']) && ($_POST['gender'] == '10')) echo ' selected="selected"'; ?>"> Male<br>
  				 <input type="radio" id="gender" name="gender" value="female"> Female<br/><br/>
                 <?php 
					// Validate the email:
					if (!empty($_REQUEST['email'])) {
						$email = $_REQUEST['email'];
						if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
							 $emailErr = "<p class='p_error'>Invalid email format</p>"; 
							 $email = NULL;
							 echo $emailErr;
							}
					} else {
						$email = NULL;
						echo "<p class='p_error'>You forgot to enter your email address!</p>";
					}
				 ?>				 
                 <label for="email">E-mail Address:</label>
				 <input type="text" id="email" name="email" value="<?php if (isset($_POST['email'])) echo ($_POST['email']); ?>">  
				 <?php
					 // Validate the username:
					if (!empty($_REQUEST['username'])) {
						$username = $_REQUEST['username']; 
					} else {
						$username = NULL;
						echo "<p class='p_error'>You forgot to enter your username!</p>";
					}				 
				 ?>
                 <label for="username">Choose a username:</label>
				 <input type="text" id="username" name="username" value="<?php if (isset($_POST['username'])) echo ($_POST['username']); ?>">  
				 <?php
					// Validate the password:
					if (!empty($_REQUEST['password1']) & !empty($_REQUEST['password2'])) {
						$password1 = $_REQUEST['password1'];
						$password2 = $_REQUEST['password2'];
						if ($password1 != $password2) {
								$password1 = NULL;
								$password2 = NULL;
								echo "<p class='p_error'> passwords do not match!</p>";
							}
						else {
							$password = $password1;	
						}
					} else {
						$password = NULL;
						echo "<p class='p_error'>You forgot to enter your password!</p>";
					}
				 ?>
				 <label for="password1">Enter a Password:</label>
				 <input type="password" id="password1" name="password1" value="<?php if (isset($_POST['password1'])) echo ($_POST['password1']); ?>">
                 
                 <label for="password2">Re-type Password:</label>
				 <input type="password" id="password2" name="password2" value="<?php if (isset($_POST['password2'])) echo ($_POST['password2']); ?>">   
			    	<?php // If everything is OK, print the message:
						if ($firstname && $email && $gender && $lastname) {
							echo ("<h2>REGISTRATION SUCCESSFUL!!</h2>");
						
						} else { // Missing form value.
							$success = FALSE;
							echo "<p class='p_error'><b>Please up the form again and fix required fields.</b></p>";
						}
					?>
			 </fieldset>
             
			 <button type="submit" class="btn btn-primary">REGISTER</button>
			 

		  
		</form>    
		
	</div><!-- End .primary-content --> 
<?php include ('footer.html') ?>