<?php  

require 'config.php'; 
require 'inc/registration_login.php'; 
require 'inc/head.php'; 

?>

<title>Emirhan Aluş's | Sign up </title>
</head>
<body>
<div class="container">

	<?php require ROOT_PATH . '/inc/navbar.php'; ?>

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>Register on Aluş's Blog</h2>
			<?php require ROOT_PATH . '/inc/errors.php'; ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
			<input type="password" name="password_1" placeholder="Password">
			<input type="password" name="password_2" placeholder="Password confirmation">
			<button type="submit" class="btn" name="reg_user">Register</button>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->

<?php require ROOT_PATH . '/inc/footer.php'; ?>
