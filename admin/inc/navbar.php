<div class="header">
	<div class="logo">
		<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
			<h1>Emirhan Aluş's Blog - Admin</h1>
		</a>
	</div>
	<div class="user-info">
		<?php if (isset($_SESSION['user'])): ?>
			
			<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp;
			<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">logout</a>
			
		<?php endif ?>
		
	</div>
</div>
