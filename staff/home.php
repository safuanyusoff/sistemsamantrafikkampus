
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">



		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Welcome</h1>
			</div>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<h2>Info</h2>
			</div>

			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Unpaid Ticket</a></li>
							<li><a href="#tab2" data-toggle="tab">Paid Ticket</a></li>
							<li><a href="#tab3" data-toggle="tab">Contact Us</a></li>
						</ul>

						<div style="background-color:#F5F0F0" class="tab-content">
							<div class="tab-pane fade in active" id="tab1"><!--tab 1 kat sini-->
								<h4>
									<?php

												$sql = "SELECT * FROM denda where Tarikh_bayar is null order by kenderaan_ID";
											$result = mysqli_query($conn, $sql);

											$sql3 = "SELECT * FROM denda where Tarikh_bayar is not null order by kenderaan_ID";
										$result3 = mysqli_query($conn, $sql3);
									?>
									<div style="background-color :transparent" class="row">
										<div class="col-lg-12">
											<div style="background-color :transparent"class="panel panel-default">

												<div class="panel-body">


												<div class="bootstrap-table">

													<div class="fixed-table-container">
														<div class="fixed-table-header">
													<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
														    <thead>
														    <tr>
																	<th>Staff Name</th>
														    	<th>No Plate</th>
														    	<th>Tarikh</th>

														    	<th>Price</th>
														    	<th>Action</th>
														    </tr>
														    </thead>
														    <tbody >
															<?php
															// output data of each row
															while($row = mysqli_fetch_assoc($result)) {

																											$sql2 = "SELECT * FROM saman where saman_id='".$row['saman_ID']."'";
																											$result2 = mysqli_query($conn, $sql2);
																											$row2 = mysqli_fetch_assoc($result2);
																											$sql4 = "SELECT * FROM staff where staff_ID='".$row['staffID']."'";
																											$result4 = mysqli_query($conn, $sql4);
																											$row4 = mysqli_fetch_assoc($result4);
															?>
													<form method="POST" action="index.php">
														    <tr data-index="0">
																	<td ><?php echo $row4["staff_name"]; ?></td>
														    	<td ><?php echo $row["kenderaan_ID"]; ?></td>
														    	<td ><?php echo $row["tarikh"]; ?></td>

														    	<td ><?php echo $row2['saman_price']; ?></td>
														    	<td >

														<a href=deletesaman.php?id=<?php echo $row["kenderaan_ID"];?>&saman=<?php echo $row["saman_ID"];?>&tarikh=<?php echo $row["tarikh"];?> onclick="return confirm('Click OK to continue')"><center><button class="button button5">PAY</button></center></a>


																</td>
														    </tr>

													</form>
															<?php

																}

															?>

														    </tbody>
															</table>
														</div>
														<div class="fixed-table-pagination">
														</div>
													</div>
												</div>

												</div>
											</div>
										</div>
									</div><!--/.row-->


								</h4>





							</div>
							<div class="tab-pane fade" id="tab2"><!--tab 2 kat sini-->
								<h4>
									<div style="background-color :transparent" class="row">
										<div class="col-lg-12">
											<div style="background-color :transparent"class="panel panel-default">

												<div class="panel-body">


												<div class="bootstrap-table">

													<div class="fixed-table-container">
														<div class="fixed-table-header">
													<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
														    <thead>
														    <tr>
																	<th>Staff Name</th>
														    	<th>No Plate</th>
														    	<th>Tarikh</th>
														    	<th>Price</th>

														    </tr>
														    </thead>
														    <tbody >
															<?php
															// output data of each row
															while($row3 = mysqli_fetch_assoc($result3)) {
																$sql5 = "SELECT * FROM saman where saman_id='".$row3['saman_ID']."'";
																$result5 = mysqli_query($conn, $sql5);
																$row5 = mysqli_fetch_assoc($result5);
																$sql6 = "SELECT * FROM staff where staff_ID='".$row3['staffID']."'";
																$result6 = mysqli_query($conn, $sql6);
																$row6 = mysqli_fetch_assoc($result6);
															?>
													<form method="POST" action="index.php">
														    <tr data-index="0">
																	<td ><?php echo $row6["staff_name"]; ?></td>
														    	<td ><?php echo $row3["kenderaan_ID"]; ?></td>
														    	<td ><?php echo $row3["Tarikh_bayar"]; ?></td>

														    	<td ><?php echo $row5['saman_price']; ?></td>

														    </tr>

													</form>
															<?php

																}
																mysqli_close($conn);
															?>

														    </tbody>
															</table>
														</div>
														<div class="fixed-table-pagination">
														</div>
													</div>
												</div>

												</div>
											</div>
										</div>
									</div><!--/.row-->


								</h4>

							</div>
							<div class="tab-pane fade" id="tab3"><!--tab 3 kat sini-->
								<h4>test</h4>



							</div>
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->



		</div><!-- /.row -->









	</div><!--/.main-->

					<script src="js/bootstrap-table.js"></script>
	<script>
		var element1 = document.getElementById("credit");
		var element2 = document.getElementById("subject");
		var element3 = document.getElementById("enrollment");
		var element4 = document.getElementById("gpa");
		element1.innerHTML = "<?php echo $totalcreadithours; ?>";
		element2.innerHTML = "<?php echo $countsubject; ?>";
		element3.innerHTML = "<?php echo $countenroll; ?>";
		element4.innerHTML = "<?php echo number_format($gpa,2); ?>";
	</script>
