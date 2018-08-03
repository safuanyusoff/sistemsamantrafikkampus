
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<img src='logo.png'>
		</form>
		<ul class="nav menu">
			<li><a href="index.php?page=home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>Home</a></li>
			<li><a href="index.php?page=ticket"><svg class="glyph stroked paperclip"><use xlink:href="#stroked-paperclip"/></svg> Tickets</a></li>

			<li role="presentation" class="divider"></li>

			<?php if($_SESSION["user_level"]=='admin') { ?>


			<li><a href="index.php?page=updatetickets"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg> Manage Tickets</a></li>

			<?php } ?>

		</ul>

	</div><!--/.sidebar-->
