<?php
	require_once('header.php');
	require('clean.php');
	$name = clean_name($_POST['name']);
	$email = clean_email($_POST['email']);
	$phone = clean_phone($_POST['phone']);
	$message = clean_message($_POST['message']);
	if ((strcmp($email, '') != 0 ||
	     strcmp($phone, '') != 0) &&
	     strlen($message) <= 2000):
	    require('connect.php');
		$query =
			"INSERT INTO contacts (" .
				"contact_name," .
				"contact_email," .
				"contact_phone," .
				"contact_message," .
				"contact_time" .
			") VALUES (" .
				"'$name'," .
				"'$email'," .
				"'$phone'," .
				"'$message'," .
				"NOW()" .
			");";
		$result = $db->query($query);
		if ($db->errno):
			error($db->error);
		endif;
		$db->close();
		header('Refresh: 1; url=index.php');
		echo '<div class="post">';
			echo '<h2 class="post">Success</h2>';
			echo '<p class="post">contact sent</p>';
		echo '</div>';
		exit;
	elseif (strlen($message) > 2000):
		message_error('message too long');
	else:
		message_error('no contact info');
	endif;
	require_once('footer.php');
	
	/* functions */
	
	function clean_name($name) {
		$name = clean($name);
		if (strcmp($name, '') == 0):
			$name = 'Anonymous';
		endif;
		return $name;
	}
	
	function clean_email($email) {
		$email = clean($email);
		/* further validation */
		return $email;
	}
	
	function clean_phone($phone) {
		$comment = clean($phone);
		/* further validation */
		return $phone;
	}
	
	function clean_message($comment) {
		$comment = clean($comment);
		/* further validation */
		return $comment;
	}
	
	function message_error($error_message) {
		header('Refresh: 1; url=index.php');
		echo '<div class="post">';
			echo '<h2 class="post">Error</h2>';
			echo '<p class="post">' . $error_message . '</p>';
		echo '</div>';
		exit;
	}
?>