<?php
if(isset($_SESSION['userID'])){
$user_ID = $_SESSION['userID'];}


			$sql = "SELECT * FROM saman";
		$result = mysqli_query($conn, $sql);

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
				<h1 class="page-header">Add Tickets</h1>
			</div>
		</div><!--/.row-->

		<div  class="row">
			<div  class="col-lg-12">
				<div  class="panel panel-default" style="background-color :transparent">
					<div  style="background-color :transparent" class="panel-heading" ><svg class="glyph stroked paperclip"><use xlink:href="#stroked-paperclip"/></svg>Ticket Details</div>
					<div class="panel-body">


						<form  class="form-horizontal" name='a' action="index.php" method="post" >
							<fieldset>
							<input type='hidden' name='page' value='ticketDB' >
							<input type='hidden' name='staffID' value='<?php echo $user_ID ;?>' >
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Plate Number</label>
									<div class="col-md-9">
									<input name="plate" type="text"  value="" placeholder='eg:ABC1234' class="form-control"  required>
									</div>
									</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Date Issued</label>
									<div class="col-md-9">
									<input name="dates" type="date"  value="" class="form-control"  required>
									</div>
									</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Offence</label>
									<div class="col-md-9">
									<select name='jenis' class="form-control" >
<?php  								while($row = mysqli_fetch_assoc($result)) { ?>
										<option value='<?php echo $row["saman_id"]; ?>'><?php echo $row["saman_name"]; ?></option>

								<?php

									}
									mysqli_close($conn);
								?>
									</select>
								</div>
								</div>


								<!-- detail-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email"></label>
									<div class="col-md-9">
							<input type="submit" class="btn btn-primary btn-md pull-mid" value="submit Form" onclick="return validate()"></input>
							<input type="button"   value="Cancel" class="btn btn-primary btn-md pull-mid">
									</div>
								</div>

								</div>
							</fieldset>

						</form>


					</div>
				</div>
			</div>
		</div>




		</div><!--/.row-->
