

	
	<div  class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		

		<div class="row" >
			<ol class="breadcrumb">
				<li><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></li>
				<li class="active">Manage Tickets</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add New Tickets</h1>
			</div>
		</div><!--/.row-->

		<div  class="row">
			<div  class="col-lg-12">
				<div  class="panel panel-default" style="background-color :transparent">
					<div  style="background-color :transparent" class="panel-heading" ><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Tickets Details</div>
					<div class="panel-body">
						<form  class="form-horizontal" action="index.php" method="post">
									<input type="hidden" name="page" value="addticketsDB">

						
							<fieldset>
							

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Ticket Name</label>
									<div class="col-md-9">
									<input type="text" name="name"  value="" placeholder='Bawa Laju' class="form-control" required> 
									</div>
									</div>			

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Ticket Price</label>
									<div class="col-md-9">
									<input type="text" name="price"  value="" placeholder='RM 50.00' class="form-control" required> 
									</div>
									</div>
			
								<div class="form-group">
									<label class="col-md-3 control-label" for="email"></label>
									<div class="col-md-9">
							<button type="submit" class="btn btn-primary btn-md pull-mid">Submit</button>
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

