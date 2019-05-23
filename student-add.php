<?php
require "libsv.php";
connect_db ();
if (isset($_POST['save'])){
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$birth =  isset($_POST['birth']) ? $_POST['birth'] : '';
	student_add($name,$birth);
	header("location:student-list.php");

};


disconnect_db();

?>




<!DOCTYPE html>
<html>
<head>
        <title>Thêm sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
	<form action="student-add.php" method="post">
		Tên SV: <input type="text" name="name"><br>
		Năm sinh: <input type="number" name="birth"><br>
		<input type="submit" name="save" value="Thêm">
	</form>
</body>
</html>