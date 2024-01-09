<?php include("header.php");
include("functions.php"); ?>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-80">
			<div class="grid-block">	
				<div class="index-intro-text">
				

<?php

$con=mysqli_connect("localhost","joji","joji@123","company");
//$con=mysqli_connect("localhost","root","","company");
$id= $_GET['id'];
$query = "SELECT * FROM student_intern WHERE RollNo='".$id."'";
$result = mysqli_query($con, $query);
$array = mysqli_fetch_assoc($result);
$name= $array["Name"];
$cpi= $array["cpi"];
$email= $array["email"]."@iitp.ac.in";
$branch = getBranchNumberFromCode(substr($id, 4, 2));
echo "<h2>Student Details</h2><hr />";
echo "<strong>Name:</strong> " . $name;
line(2);
echo "<strong>CPI:</strong> " . $cpi;
line(2);
echo "<strong>Branch:</strong> " . getBranchName($branch);
line(2);
echo "<strong>Email:</strong> " . $email;
line(2);/*
?>
<a href="pdf_server.php?file=<?php echo $id?>">Click here to download resume</a>
<?php
line(2);
*/
if(file_exists("CV_intern/".$id.".pdf")) {
	echo "<h3>Resume:<h3>";
	echo "<iframe width='100%' height='800px' src='CV_intern/".$id.".pdf'/></iframe>";
}
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
