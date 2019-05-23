<?php
	require 'libsv.php';
	connect_db();
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		$kq = get_all_students("WHERE sv_id = '$id'");


	}
	if (isset($_POST['edit'])){
		$name = $_POST['name'];
		$birth = $_POST['birth'];
		student_edit($name,$birth,$id);
		echo $name.' - '.$birth. ' - '.$id ;
		// header("location:student-list.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
        <title>Sửa sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
	
	<form action="" method="post">
		
		Tên SV: <input type="text" name="name" value="<?php echo $kq[$_GET['key']]['sv_name']; ?>"><br>
		Năm sinh: <input type="number" name="birth" value ="<?php echo $kq[$_GET['key']]['sv_birthday']; ?>"><br>
		<input type="submit" name="edit" value="sửa">
	</form>

</body>

<?php


?>

</html>