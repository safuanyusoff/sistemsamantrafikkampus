<?php 

		if(isset($_GET['ID'])){
			$ID = $_GET['ID'];}
		
		$sql = "SELECT * FROM saman where saman_id='$ID'"; 
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result)	

?>

	
	<div  class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		

		<div class="row" >
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

		<div  class="row">
			<div  class="col-lg-12">
				<div  class="panel panel-default" style="background-color :transparent">
					<div  style="background-color :transparent" class="panel-heading" ><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Tickets Details</div>
					<div class="panel-body">
						<form  class="form-horizontal" action="index.php" method="post" onsubmit="return confirm('Are your Sure to delete?')";>
									<input type="hidden" name="page" value="deleteticketsDB">
									<input type="hidden" name="ID" value="<?php echo $ID;?>">
						
							<fieldset>
							
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tickets ID</label>
									<div class="col-md-9">
									<input type="text" name="id"  value="<?php echo $row['saman_id']; ?>" placeholder='BTAL4037125' class="form-control" readonly> 
									</div>
									</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Ticket Name</label>
									<div class="col-md-9">
									<input type="text" name="name"  value="<?php echo $row['saman_name']; ?>" placeholder='Bawa Laju' class="form-control" readonly> 
									</div>
									</div>			

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Ticket Price</label>
									<div class="col-md-9">
									<input type="text" name="price"  value="<?php echo $row['saman_price']; ?>" placeholder='RM 50.00' class="form-control" readonly> 
									</div>
									</div>
			
								<div class="form-group">
									<label class="col-md-3 control-label" for="email"></label>
									<div class="col-md-9">
							<button type="submit" class="btn btn-primary btn-md pull-mid">Delete</button>
							<button type="reset" class="btn btn-primary btn-md pull-mid">Cancel</button>
									</div>
								</div>
									
							</fieldset>

						</form>
					</div>
				</div>
			</div>
		</div>		




		</div><!--/.row-->	

