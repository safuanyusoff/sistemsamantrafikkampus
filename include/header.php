<?php

if(isset($_SESSION['pengguna_id'])){
	$student_id = $_SESSION['pengguna_id'];
}else{
			header('Location: login.php?a=You must log In First');} ?>
	
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>NJBRZK</span> 1M   ♪ ♫ ♩ ♬ ♭ ♮ ♯</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $_SESSION['pengguna_id']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="index.php?page=profile"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="index.php?page=changepass"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Change Password</a></li>
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		