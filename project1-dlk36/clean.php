<?php
	/* functions */
	
	function clean($string) {
		$string = trim($string);
		$string = strip_tags($string);
		return $string;
	}
?>