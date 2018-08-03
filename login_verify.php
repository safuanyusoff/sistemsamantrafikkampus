<?php
	// Database Connection ###############
	include_once("include/db_connection.php");

	// check id and password
	$id = $_POST['user_ID'];
	$pass = $_POST['password'];

	if(isset($_POST['admin'])){
		$sql = "SELECT * FROM staff WHERE staff_ID='$id' AND password='".($pass)."'";
	$result = mysqli_query($conn, $sql);
	}else{
		$sql = "SELECT * FROM student WHERE student_ID='$id' AND password='".($pass)."'";
	$result = mysqli_query($conn, $sql);

	}

	if (mysqli_num_rows($result) > 0){ // if login success
		session_start(); // create session
		$row = mysqli_fetch_assoc($result);

		if(isset($_POST['admin'])){
			$_SESSION['userID']=$row['staff_ID']; // store student id in session
			$_SESSION['user_level']=$row['userType'];; // user is not admin

			header('Location: staff/index.php?page=home');

		} else {

			$_SESSION['userID']=$row['student_ID']; // store student id in session
			$_SESSION['name']=trim($row['student_name']); // store studentname in session
			$_SESSION['pro']=trim($row['student_course']);
			$_SESSION['semester']=trim($row['student_sem']);
			$_SESSION['user_level']=0; // user is not admin



			header('Location: studentPage.php');
		}


	} else { // if login failed
		header('Location: index.php?msg=Login failed. Please try again.');
	}


?>
