<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 4px 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.button3 {
    background-color: white;
    color: black;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}
</style>

<?php



	if(isset($_POST['search'])){
		$jobName=$_POST['search'];
			$sql = "SELECT * FROM vacancy WHERE JobName LIKE '%".htmlentities($jobName)."%' and companyID='$companyID' ORDER BY JobName ";
		}
		else{
			$sql = "SELECT * FROM saman"; }
		$result = mysqli_query($conn, $sql);
?>


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></li>
				<li class="active">Manage Tickets</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Delete Tickets</h1>
			</div>
		</div><!--/.row-->
							<div  style="background-color :transparent" class="panel-heading" ><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>
List of Tickets</div>


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
							    	<th>Tickets ID</th>
							    	<th>Ticket Name</th>

							    	<th>Price</th>
							    	<th>Action</th>
							    </tr>
							    </thead>
							    <tbody >
								<?php
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {

								?>
						<form method="POST" action="index.php">
							    <tr data-index="0">
							    	<td ><?php echo $row["saman_id"]; ?></td>
							    	<td ><?php echo $row["saman_name"]; ?></td>

							    	<td ><?php echo $row["saman_price"]; ?></td>
							    	<td >

							<a href=index.php?page=deletetickets1&ID=<?php echo $row["saman_id"]; ?> ><center><button class="button button5">View</button></center></a>


									</td>
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




	</div><!--/.main-->

				<script src="js/bootstrap-table.js"></script>
