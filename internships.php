<?php 
include("functions.php");
include("header.php"); 
?>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-80">
			<div class="grid-block">	
				<div class="index-intro-text">
					<h2>Pre Final Year Branch-wise student list</h2><hr>
					<h3>B. Tech.</h3>
					<a href="studentlist_intern.php?branch=0&type=0"><?php echo getBranchName(0); ?></a><br /><br />
					<a href="studentlist_intern.php?branch=1&type=0"><?php echo getBranchName(1); ?></a><br /><br />
					<a href="studentlist_intern.php?branch=2&type=0"><?php echo getBranchName(2); ?></a><br /><br />
					<a href="studentlist_intern.php?branch=3&type=0"><?php echo getBranchName(3); ?></a><br /><br />
					<a href="studentlist_intern.php?branch=4&type=0"><?php echo getBranchName(4); ?></a><br /><br />
<?php
/*
					<h3>M. Tech.</h3>
					<a href="studentlist.php?branch=0&type=1"><?php echo getBranchName(0); ?></a><br>
					<a href="studentlist.php?branch=8&type=1"><?php echo getBranchName(8); ?></a><br>
					<a href="studentlist.php?branch=5&type=1"><?php echo getBranchName(5); ?></a><br>
					<a href="studentlist.php?branch=6&type=1"><?php echo getBranchName(6); ?></a><br>
					<a href="studentlist.php?branch=7&type=1"><?php echo getBranchName(7); ?></a><br>
*/
?>
				</div>
			</div>
		</div>
		<div class="grid-20">
			<?php include("panel.php"); ?>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
