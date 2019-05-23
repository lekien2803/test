<?php
	require 'libsv.php';
	$student = get_all_students ();
	disconnect_db();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Danh sách sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>Danh sách sinh vien</h1>
        <a href="student-add.php">Thêm sinh viên</a> <br/> <br/>
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Birthday</td>
                <td>Sửa</td>
                <td>Xóa</td>
            </tr>
            <?php foreach ($student as $key => $value){ ?>
            <tr>
            	<td> <?php echo $value['sv_id'] ?> </td>
            	<td> <?php echo $value['sv_name'] ?> </td>
            	<td> <?php echo $value['sv_birthday'] ?> </td>
            	<td> <a href="student-edit.php?id=<?php echo $value['sv_id']; ?>&key=<?php echo $key;?>">Sửa</a> </td>
            	<td> <a href="student-delete.php?id=<?php echo $value['sv_id']; ?>">Xóa</a> </td>
            </tr>

        	<?php }?>



</body>
</html>