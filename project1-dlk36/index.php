<?php
	require_once('header.php');
?>
	<div class="post">
		<h2 class="post">Contact</h2>
		<div class="submit">
			<form action="contact.php" method="post">
				<label for="name">Name</label>
				<input name="name" type="text" />
				<label for="email">Email</label>
				<input name="email" type="text" />
				<label for="phone">Phone</label>
				<input name="phone" type="text" />
				<label for="message">Message</label>
				<textarea name="message"></textarea>
				<input name="submit" type="submit" value="Submit" />
			</form>
		</div>
	</div>
<?php
	require('connect.php');
	$query =
		"SELECT * FROM posts " .
		"ORDER BY post_id DESC;";
	$result = $db->query($query);
	if ($db->errno):
		error($db->error);
	endif;
	$num_rows = $result->num_rows;
	for ($i = 0; $i < $num_rows; $i++):
		$row = $result->fetch_array();
		echo '<div class="post">';
			echo '<div class="post-header">' . $row['post_time'] . '</div>';
			echo '<h2 class="post">' . $row['post_title'] . '</h2>';
			echo '<p class="post">' . $row['post_content'] . '</p>';
			echo '<div class="post-footer"><a href="comments.php?post_id=' . $row['post_id'] .
			     '">comments</a></div>';
		echo '</div>';
	endfor;
	$db->close();
	require_once('footer.php');
?>