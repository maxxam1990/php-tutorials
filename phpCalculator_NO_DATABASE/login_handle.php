<?php 
	if ($_REQUEST['username'] == "maxxam" && $_REQUEST['password'] == "password") { 
		header('Location: home.php');		
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Max's Tax Calculator</title>	
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>

	<body>
		
		<div id="content"> <!-- Start of the page-specific content. -->
				<h1>Second Homework - Max's Tax Calculator</h1>
				<div class="primary-content t-border">
					<form action="login_handle.php" method="GET">
						<h1 class="h1_form">Please Log In</h1>
						<fieldset>
							<label for="username">Username:</label>
								<?php // Validate the username:
									if (!empty($_REQUEST['username'])) {
										$username = $_REQUEST['username'];
											if ($username != "maxxam") {
												echo "<p class='p_error'>Wrong Username!</p>";
											}
									} else {
										$username = NULL;
										echo "<p class='p_error'>You forgot to enter your username!</p>";
									}
								?>
							<input type="text" id="username" name="username" value="<?php if (isset($_POST['username'])) echo ($_POST['username']); ?>">

							<label for="password">Password:</label>
								<?php // Validate the password:
									if (!empty($_REQUEST['password'])) {
										$password = $_REQUEST['password'];
											if ($password != "password") {
												echo "<p class='p_error'>Wrong Password!</p>";
											}
									}
									else {
										$password = NULL;
										echo "<p class='p_error'>You forgot to enter your password!</p>";
									}
								?>
							<input type="password" id="password" name="password" value="<?php if (isset($_POST['password'])) echo ($_POST['password']); ?>">
						</fieldset>
						<button type="submit" class="btn btn-primary">LOG IN</button>
					</form>    
				</div>
			<div class="primary-content secondary-content">
				<p><a href="registration.html"><h1 class="h1_form">Register Now!</h1></a></p>
			</div>
		</div><!-- End .primary-content -->  	
		
		<footer class="main-footer"> 
			<p>&copy; 2017 Max Acosta.</p> 
		</footer>	
	</body>
</html>