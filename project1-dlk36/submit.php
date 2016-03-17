<?php
	require_once('header.php');
	require('clean.php');
	$post_id = $_GET['post_id'];
	$name = clean_name($_POST['name']);
	$email = clean_email($_POST['email']);
	$comment = clean_comment($_POST['comment']);
	if (strcmp($comment, '') != 0 &&
		strlen($comment) <= 2000):
		require('connect.php');
		$query =
			"INSERT INTO comments (" .
				"comment_post_id," .
				"comment_name," .
				"comment_email," .
				"comment_comment," .
				"comment_time" .
			") VALUES (" .
				"'$post_id'," .
				"'$name'," .
				"'$email'," .
				"'$comment'," .
				"NOW()" .
			");";
		$result = $db->query($query);
		if ($db->errno):
			error($db->error);
		endif;
		$db->close();
		header('Location: comments.php?post_id=' . $post_id);
		exit;
	elseif (strlen($comment) > 2000):
		comment_error('comment too long', $post_id);
	else:
		comment_error('no text entered', $post_id);
	endif;
	require_once('footer.php');
	
	/* functions */
	
	function clean_name($name) {
		$name = clean($name);
		if (strcmp($name, '') == 0):
			$name = 'anonymous';
		endif;
		return $name;
	}
	
	function clean_email($email) {
		$email = clean($email);
		/* further validation */
		return $email;
	}
	
	function clean_comment($comment) {
		$comment = clean($comment);
		/* further validation */
		return $comment;
	}
	
	function comment_error($error_message, $post_id) {
		header('Refresh: 1; url=comments.php?post_id=' . $post_id);
		echo '<div class="post">';
			echo '<h2 class="post">Error</h2>';
			echo '<p class="post">' . $error_message . '</p>';
		echo '</div>';
		exit;
	}
?>