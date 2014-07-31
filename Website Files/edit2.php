<?php
if (!empty($_POST))
{
	$file = 'newthing.txt';
	$current = '';
	$current .= $_REQUEST['content'];
	file_put_contents($file, $current);
}

header("Location: read.php");
?>