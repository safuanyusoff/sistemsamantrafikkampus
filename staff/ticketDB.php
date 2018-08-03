	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			

		<div class="row">
			<ol class="breadcrumb">
				<li><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></li>
				<li class="active">Manage Tickets</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Tickets</h1>
			</div>
		</div><!--/.row-->
		


<?php 



$T_name = $_POST['plate'];
$jenisKesalahan = $_POST['jenis'];
$date = $_POST['dates'];
$staffID  = $_POST['staffID'];

		$sql2 = "insert into denda (kenderaan_id,saman_id,tarikh,staffID)
VALUES ('$T_name','$jenisKesalahan','$date','$staffID')";
		$result2 = mysqli_query($conn, $sql2);
		?>
		<div class="row">
			<div class="col-lg-12">
				<div class="alert bg-success" role="alert">
					Ticket was succefully added!.</div>
					<div class="panel-body">
						[<a href='index.php?page=Home'>Back to Home</a>]
					</div>
				</div>
			</div>

		</div><!--/.row-->

	</div>	<!--/.main-->