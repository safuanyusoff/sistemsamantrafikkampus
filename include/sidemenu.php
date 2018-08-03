<?php

if(isset($_SESSION['pengguna_id'])){
	$student_id = $_SESSION['pengguna_id'];
}else{
			header('Location: logout.php?a=You must log In First');} ?>
			
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<img src='logo.png'>
		</form>
		<ul class="nav menu">
			
			<li><a href="index.php?page=report_card"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Report Card</a></li>

			<li><a href="index.php?page=subject_list"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Register Subject</a></li>

			<li><a href="index.php?page=discussion"><svg class="glyph stroked two-messages"><use xlink:href="#stroked-two-messages"></use></svg> Discussion</a></li>

			<li role="presentation" class="divider"></li>

			<?php if($_SESSION["pengguna_level"]>0) { ?>

			<li><a href="index.php?page=student_list"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Student List</a></li>

			<li><a href="index.php?page=grade_subject"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Update Grade</a></li>


			<?php } ?>
						
		</ul>

	</div><!--/.sidebar-->