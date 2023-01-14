<?php 
	session_start();

	// connect to database
    $conn = mysqli_connect("localhost", "root", "", "php-blog");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

    // In this section we say set a root path to use in different files so if we change root path we can change it from one place.
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/php-blog/');
?>
