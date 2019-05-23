<?php
	require 'libsv.php';
	connect_db();
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		student_delete($id);
	}
	
	disconnect_db();
	header("location:student-list.php");


?>

