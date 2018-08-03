<?php
	session_start();

	// Get page
	if(isset($_REQUEST['page'])){
	$loadpage = $_REQUEST['page'].'.php';}
	else {// if no page is defined, go to login
		header('Location:../index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>UniSZA</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
		<script src="js/jquery-1.11.1.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://kit.glyphs.co/3jn8b5.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<?php


	// Get page
	if(isset($_REQUEST['page']))
		$loadpage = $_REQUEST['page'].'.php';
	else // if no page is defined, go to login
		header('Location: login.php');

?>




</head>

<body>
<?php

	// Database Connection ###############
	include_once("include/db_connection.php");


	// Page Content ######################


	include_once($loadpage); 
	// Page Header #######################

	include_once("include/header.php");
	// Side Menu #########################
	include_once("include/sidemenu.php");

	// Page footer #########################
	// You are not allowed to remove or alter this footer
	// You are not allowed to remove or alter this footer
	// You are not allowed to remove or alter this footer
	// You are not allowed to remove or alter this footer
	//include_once("include/footer.php");
	// You are not allowed to remove or alter this footer
	// You are not allowed to remove or alter this footer
	// You are not allowed to remove or alter this footer
	// You are not allowed to remove or alter this footer

?>






</body>

</html>
