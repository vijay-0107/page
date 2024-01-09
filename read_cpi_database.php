<?php
$con=mysqli_connect("localhost","joji","joji@123","company");
$myfile = fopen("CPI_database.txt","r") or die("Unable to open file");
while(!feof($myfile)) {
	$temp = fgets($myfile);
	$temp = trim($temp);
	$parts = explode("\t", $temp);
	$tot = count($parts);
	if(isset($parts[0]) && $tot==2) {
		$roll = $parts[0];
		$cpi = $parts[1];
		$result1 = mysqli_query($con,"SELECT * FROM student_intern WHERE id='$roll'");
		if($result1 && mysqli_num_rows($result1)==1) {
			$result2 = mysqli_query($con,"INSERT INTO cpi_intern SET id='$roll', cpi='$cpi'");
			if(!$result2) {
				echo $temp;
			}
		}
	}
}
?>