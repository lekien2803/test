<?php
	//biến toàn cục
	global $conn;
	global $option;
	//hàm kết nối db

	function connect_db () {
		global $conn;
		$option = array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		//Nếu chưa kết nối thì kết nối
		if (!$conn){
			try {
				$conn = new PDO("mysql:host=localhost;dbname=qlsv",'kien','12345',$option);
				
			}
			catch(PDOException $e) {
			    echo "Lỗi: " . $e->getMessage();
			    exit();
			}
		}
	}


	//hàm ngắt kết nối
	function disconnect_db (){
		global $conn;

		//Nếu đã kết nối thì ngắt
		if ($conn){
		$conn = null;
		}
	}

	

	

	//hàm lấy tất cả sinh viên
	function get_all_students (){
		global $conn;

		connect_db();

		$stmt = $conn->prepare("SELECT * from tb_sinhvien");

		 $stmt -> execute();


		$stmt -> setfetchmode(PDO::FETCH_ASSOC);

		$ketqua = $stmt -> fetchall();

		return $ketqua;

		
	}


	//Hàm lấy sinh viên theo ID
	function student_select ($option){
		global $conn;
		$sql = "SELECT * FROM tb_sinhvien";
		$data = $conn -> query($sql);
		return $data;

	}

	// Hàm thêm sinh viên
	function student_add($name, $birth) {
		global $conn;
		connect_db();
		
		$sql = "INSERT INTO tb_sinhvien (sv_name, sv_birthday) VALUES ('$name','$birth')";
		$conn -> exec($sql) or die('lỗi');
	    

	}


	//Hàm xóa sinh viên
	function student_delete($id){
		global $conn;
		connect_db();
		$sql = "DELETE from tb_sinhvien where sv_id = '$id' ";
		$conn -> exec($sql) or die('lỗi');

	
	}
	 //Hàm sửa sinh viên
	function student_edit($id,$name,$birth) {
		global $conn;
		connect_db();
		$sql = "UPDATE tb_sinhvien SET sv_name = '$name', sv_birthday ='$birth' where sv_id ='$id'";
		$conn -> query($sql) or die('lỗi');
	}
?>