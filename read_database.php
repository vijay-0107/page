<?php
$con=mysqli_connect("localhost","joji","joji@123","company");
$myfile = fopen("email_database.txt","r") or die("Unable to open file");
while(!feof($myfile)) {
	$temp = fgets($myfile);
	$parts = explode(" ", $temp);
	$tot = count($parts);
	if(isset($parts[0])) {
		$email = $parts[0];
		$email = $email;
		if(isset($parts[$tot-1])) {
			$roll = trim($parts[$tot-1]);
			$result1 = mysqli_query($con,"SELECT * FROM student_intern WHERE id='$roll'");
			if($result1 && mysqli_num_rows($result1)==1) {
				$result2 = mysqli_query($con,"INSERT INTO email_intern SET id='$roll', email='$email'");
				if(!$result2) {
					echo $temp;
				}
			}
		}
	}
}
?>