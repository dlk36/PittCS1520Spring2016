<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>project1-dlk36</title>
		<link href="./css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="content">
		<?php
			/* functions */
			
			function error($error_message) {
				echo '<div class="post">';
					echo '<h2 class="post">Error</h2>';
					echo '<p class="post">' . $error_message . '</p>';
				echo '</div>';
				exit;
			}
		?>