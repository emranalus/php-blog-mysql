<?php 

function getPublishedPosts() {
	global $conn;

	// This query adds topic name from topics in database using topic_id from post_topic using post_id to posts.
	// Its good to be alive isn't it.
	$sql = "SELECT posts.id, posts.user_id, posts.title, topics.topic, topics.topic_id, posts.slug, posts.views, posts.image, posts.body, posts.published, posts.created_at, posts.updated_at 
	FROM posts LEFT JOIN topics ON posts.id=(SELECT topics.topic_id FROM post_topic WHERE post_topic.post_id=posts.id) WHERE posts.published=true";
	
	$result = mysqli_query($conn, $sql);

	// MYSQLI_ASSOC is for making output a associative array.
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $posts;
}

function getPublishedPostsByTopic($topicId)
{
	global $conn;
	
	$sql = "SELECT posts.id, posts.user_id, posts.title, topics.topic, topics.topic_id, posts.slug, posts.views, posts.image, posts.body, posts.published, posts.created_at, posts.updated_at 
	FROM posts LEFT JOIN topics ON posts.id=(SELECT topics.topic_id FROM post_topic WHERE post_topic.post_id=posts.id) 
	WHERE posts.id = (SELECT post_topic.post_id from post_topic WHERE post_topic.topic_id=$topicId) AND posts.published=true";

	$result = mysqli_query($conn, $sql);

	$posts = mysqli_fetch_assoc($result);

	return array($posts);
}

function getTopicNameById($topicId)
{
	global $conn;

	$sql = "SELECT topics.topic FROM topics WHERE topics.topic_id=$topicId";

	$result = mysqli_query($conn, $sql);

	$topic = mysqli_fetch_assoc($result);

	return $topic['topic'];
}

function getSinglePost($slug)
{
	global $conn;

	$sql = "SELECT posts.id, posts.user_id, posts.title, topics.topic, topics.topic_id, posts.slug, posts.views, posts.image, posts.body, posts.published, posts.created_at, posts.updated_at 
	FROM posts LEFT JOIN topics ON posts.id=(SELECT topics.topic_id FROM post_topic WHERE post_topic.post_id=posts.id) 
	WHERE posts.published=true AND posts.slug='$slug'";

	$result = mysqli_query($conn, $sql);

	$post = mysqli_fetch_assoc($result);

	return $post;
}

function getAllTopics()
{
	global $conn;

	$sql = "SELECT * FROM topics";

	$result = mysqli_query($conn, $sql);

	$topics = mysqli_fetch_assoc($result);

	return $topics;
}

?>
