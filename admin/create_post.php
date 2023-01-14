<?php  

require '../config.php'; 
require ROOT_PATH . '/admin/inc/admin_functions.php'; 
require ROOT_PATH . '/admin/inc/post_functions.php'; 
require ROOT_PATH . '/admin/inc/head.php'; 

?>

<!-- Get all topics -->
<?php $topics = getAllTopics();	?>
	<title>Admin | Create Post</title>
</head>
<body>
	<!-- admin navbar -->
	<?php require ROOT_PATH . '/admin/inc/navbar.php'; ?>

	<div class="container content">
		<!-- Left side menu -->
		<?php require ROOT_PATH . '/admin/inc/menu.php'; ?>

		<!-- Middle form - to create and edit  -->
		<div class="action create-post-div">
			<h1 class="page-title">Create/Edit Post</h1>
			<form method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'admin/create_post.php'; ?>" >
				<!-- validation errors for the form -->
				<?php require ROOT_PATH . '/inc/errors.php'; ?>

				<!-- if editing post, the id is required to identify that post -->
				<?php if ($isEditingPost === true): ?>
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
				<?php endif ?>

				<input type="text" name="title" value="<?php echo $title; ?>" placeholder="Title">
				<label style="float: left; margin: 5px auto 5px;">Featured image</label>
				<input type="file" name="featured_image" >
				<textarea name="body" id="body" cols="30" rows="10"><?php echo $body; ?></textarea>
				<select name="topic_id">
					<option value="" selected disabled>Choose topic</option>
					<?php foreach ($topics as $topic): ?>
						<option value="<?php echo $topic['topic_id']; ?>">
							<?php echo $topic['topic']; ?>
						</option>
					<?php endforeach ?>
				</select>
				
				<!-- if editing post, display the update button instead of create button -->
				<?php if ($isEditingPost === true): ?> 
					<button type="submit" class="btn" name="update_post">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_post">Save Post</button>
				<?php endif ?>

			</form>
		</div>
		<!-- // Middle form - to create and edit -->
	</div>
</body>
</html>

<script>
	CKEDITOR.replace('body');
</script>
