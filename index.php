<?php  

require 'config.php'; 
require ROOT_PATH . '/inc/head.php';
require ROOT_PATH . '/inc/public_functions.php';
require ROOT_PATH . '/inc/registration_login.php';

$posts = getPublishedPosts();

?>

<title>Emirhan Aluş's Blog | Home </title>
</head>
<body>
	<!-- container - wraps whole page -->
	<div class="container">

		<!-- I divided sections of code as much as I can to stick with single responsibility principle and improve code readability -->
		<?php require 'inc/navbar.php'; ?>
		<?php require 'inc/banner.php'; ?>

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h1>
			<hr>
			
			<!-- Display Posts -->
			<?php foreach($posts as $post): ?>
				<div class="post" style="margin-left: 0px;">
					
					<img src="<?php echo BASE_URL . 'static/img/' . $post['image']; ?>" class="post_image" alt="" width="300" height="300">

					<?php if (isset($post['topic'])): ?>
						<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic_id'] ?>"
						class="btn category">
						<?php echo $post['topic'] ?>
						</a>
					<?php endif ?>
					
					<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
						<div class="post_info">
							<h3><?php echo $post['title'] ?></h3>
							<div class="info">
								<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
								<span class="read_more">Read more...</span>
							</div>
						</div>
					</a>

				</div>
			<?php endforeach; ?>
			<!-- // Display Posts -->
		
		</div>
		<!-- // Page content -->
		
<?php require 'inc/footer.php'; ?>
