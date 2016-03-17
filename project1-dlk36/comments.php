<?php
	require_once('header.php');
	require('connect.php');
	$post_id = $_GET['post_id'];
	$query =
		"SELECT * FROM posts " .
		"WHERE post_id = '$post_id'";
	$result = $db->query($query);
	if ($db->errno):
		error($db->error);
	endif;
	$row = $result->fetch_array();
?>
	<div class="post">
		<div class="post-header"><?php echo $row['post_time'] ?></div>
		<h2 class="post"><?php echo $row['post_title'] ?></h2>
		<p class="post"><?php echo $row['post_content'] ?></p>
		<div class="post-footer"><a href="index.php">return</a></div>
		<div class="submit">
			<form action="submit.php?post_id=<?php echo $post_id ?>" method="post">
				<label for="name">Name</label>
				<input name="name" type="text" />
				<label for="email">Email</label>
				<input name="email" type="text" />
				<label for="comment">Comment</label>
				<textarea name="comment"></textarea>
				<input name="submit" type="submit" value="Submit" />
			</form>
		</div>
		<?php
			$query =
				"SELECT * FROM comments " .
				"WHERE comment_post_id = '$post_id' " .
				"ORDER BY comment_id DESC;";
			$result = $db->query($query);
			if ($db->errno):
				error($db->error);
			endif;
			$num_rows = $result->num_rows;
			for ($i = 0; $i < $num_rows; $i++):
				$row = $result->fetch_array();
				echo '<div class="comment">';
					echo '<p class="comment">' . $row['comment_comment'] . '</p>';
					echo '<div class="comment-footer">by '. $row['comment_name'] . ' on ' .
					     $row['comment_time'] . '</div>';
				echo '</div>';
			endfor;
			$db->close();
		?>
	</div> <!-- <div class="post"> -->
<?php
	require_once('footer.php');
?>