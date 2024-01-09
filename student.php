<?php include("header.php");
include("functions.php"); ?>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-80">
			<div class="grid-block">	
				<div class="index-intro-text">
				

<?php

# change in final version
$con=mysqli_connect("localhost","joji","joji@123","company");
//$con=mysqli_connect("localhost","root","","company");


$id= $_GET['id'];
$name= getName($con,$id);
$cpi= getCPI($con,$id);
$email= getEmail($con,$id);
$branch = getBranch($con,$id);
echo "<h2>Student Details</h2><hr />";
echo "<strong>Name:</strong> " . $name;
line(1);
echo "<strong>CPI:</strong> " . $cpi;
line(1);
echo "<strong>Branch:</strong> " . getBranchName($branch);
line(1);
echo "<strong>Email:</strong> " . $email;
line(1);
echo "<h3>Resume:<h3>";
echo "<iframe width='100%' height='800px' src='CV/".$id.".pdf'/></iframe>";
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
