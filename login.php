<?php  

require 'config.php'; 
require 'inc/registration_login.php'; 
require 'inc/head.php'; 

?>

<title>Emirhan Aluş's Blog | Sign in </title>
</head>
<body>
<div class="container">
	
	<?php require ROOT_PATH . '/inc/navbar.php'; ?>
	

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Login</h2>
			<?php require ROOT_PATH . '/inc/errors.php'; ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" class="btn" name="login_btn">Login</button>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->


<?php require ROOT_PATH . '/inc/footer.php'; ?>
