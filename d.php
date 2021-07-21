<?php 
	session_start();
	$db = new mysqli("localhost", "uteam01_gouniversity", "gouni", "uteam01_gouni");
	// if ($db->connect_errno) {
	// echo "error";
	// }
	// else{
	// echo "succesful connection";
	// }



	function getFromDb($table, $id = null)
	{
		global $db;$arr = [];
		if ($id == null) {
			$sql = $db->query("select * from $table");
		}else{
			$sql = $db->query("select * from $table where id = '$id'");
		}
		if ($sql->num_rows > 0) {
			while ($row = $sql->fetch_assoc()) {
				$arr[] = $row;
			}
		}
		return $arr;
	}
	
	
	
	// january payment page starts here
	if (isset($_POST['fullname'])) {	
	$fullname = $_POST['fullname'];	
	$address = $_POST['address'];	
	$phone = $_POST['phonenumber'];
	$faculty = $_POST['faculty'];
	$level = $_POST['level'];
	$date = $_POST['dob'];

		$sql = $db->query("select * from students where phone = '$phone'");
		if ($sql->num_rows > 0) {
			// echo "username already exists!";
			echo "Student Details already exists!!!";
		}else{
			$sql = $db->query("insert into students (fullname, address, phone, faculty, level, dob) values ('$fullname', '$address', '$phone', '$faculty', '$level', '$date')");
			if ($sql) {
				echo "ok";
			}else{
				echo "Invalid Details!";
			}
		}
		
	}


	




	
 ?>