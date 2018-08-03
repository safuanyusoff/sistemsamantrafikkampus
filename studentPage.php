<?php 	include_once("include/db_connection.php");
	session_start();
	//$sql = "SELECT * FROM company inner join  application on company.companyID=application.companyID WHERE userID='$user_id'";
				$sql = "SELECT * FROM denda inner join kenderaan on denda.kenderaan_ID=kenderaan.kenderaan_ID where student_ID='".$_SESSION['userID']."'";
		$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Traffic Ticket System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">TICKETS</a>
                    </li>
                    <li class="page-scroll">
                        <a href="https://www.sentral.unisza.edu.my/index.php">PORTAL</a>
                    </li>
                    <li class="page-scroll">
                        <a href="logout.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="testing.png" alt="">
                    <div class="intro-text">
                        <h1 class="name"></h1>
                        <span class="skills">
													<P>Matric Number: <?php echo $_SESSION['userID'] ?>
													<p>Name: <?php echo $_SESSION['name'] ?><br>
													<P>Program : <?php echo $_SESSION['pro'] ?>
													<P>Semester : <?php echo $_SESSION['semester'] ?>
													</P>
												</span>
                        <hr class="star-light">
                        <span class="skills"><p>Attention : All ticket issued are subject to law by Universiti Sultan Zainal Abidin</P></span>

												<a href="https://www.dropbox.com/s/35xaceer6sul9ej/Peraturan_Lalulintas_UNiSZA_2016.pdf.pdf?dl=0" class="btn btn-primary">Policy</a> <!-- href fakin shit sini-->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Ticket</h2>
                    <hr class="star-primary">

		<table class="table table-bordered">
			<tbody>
			<tr class="warning">
				<th>No.</th>
				<th>Ticket ID</th>
				<th>Offence</th>
				<th align="center">Date Issued</th>
				<th align="center">Price</th>

			</tr>
								<?php								   $i=1;
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {

		$sql2 = "SELECT * FROM saman where saman_id='".$row['saman_ID']."'";
		$result2 = mysqli_query($conn, $sql2);
		$row2 = mysqli_fetch_assoc($result2);
								?>
			<tr bgcolor="#ffffff" onmouseover="this.bgColor='#18bc9c'" onmouseout="this.bgColor='#ffffff'">
				<td align="left"><b><?php echo $i ?></b></td>
				<td align="left"><?php echo $row['saman_ID'] ?></td>
				<td align="left"><?php echo $row2['saman_name'] ?></td>
				<td align="left"><?php echo $row['tarikh'] ?></td>
				<td align="left"><?php echo $row2['saman_price'] ?></td>

			</tr>
								<?php

								$i=$i+1;		}
									mysqli_close($conn);
								?>



<!--		<tr class="warning">
			<td align="center" colspan="3"><b>Jumlah Saman</b></td>
			<td align="center" colspan="3"></td>

		</tr>
		<tr bgcolor="#2c3e50"><td align="center" colspan="3"><font color="#fff"><?php echo $i=$i-1 ?></font></td>

		</tr> -->
		</tbody>
		</table>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">

				</div>
        </div>
    </section>







    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>




    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
