<?php
	$db_hostname = 'localhost';
	$db_username = 'administrator';
	$db_password = 'swordfish';
	$db_database = 'project1_dlk36';
	$db = new mysqli($db_hostname, $db_username, $db_password, $db_database);
	if ($db->connect_errno):
		error($db->connect_error);
	endif;
?>