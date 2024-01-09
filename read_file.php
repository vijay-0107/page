<?php
$con=mysqli_connect("localhost","joji","joji@123","company");
$myfile = fopen("btech12_cse.txt","r") or die("Unable to open file");
while(!feof($myfile)) {
	$temp = fgets($myfile);
	$parts = explode ("\t", $temp);
	$name = $parts[0];
	if(isset($parts[1])) {
		$roll = str_replace("\r\n",'',$parts[1]);
		$result1 = mysqli_query($con,"INSERT INTO student_intern SET name='$name', id='$roll', branch = '0', type = '0'");
		if(!$result1) {
			echo $parts[1]."<br />";
		}
//		echo $roll.$name;
	}
}
$myfile = fopen("btech12_ee.txt","r") or die("Unable to open file");
while(!feof($myfile)) {
	$temp = fgets($myfile);
	$parts = explode ("\t", $temp);
	$name = $parts[0];
	if(isset($parts[1])) {
		$roll = str_replace("\r\n",'',$parts[1]);
		$result1 = mysqli_query($con,"INSERT INTO student_intern SET name='$name', id='$roll', branch = '1', type = '0'");
		if(!$result1) {
			echo $parts[1]."<br />";
		}
//		echo $roll.$name;
	}
}
$myfile = fopen("btech12_me.txt","r") or die("Unable to open file");
while(!feof($myfile)) {
	$temp = fgets($myfile);
	$parts = explode ("\t", $temp);
	$name = $parts[0];
	if(isset($parts[1])) {
		$roll = str_replace("\r\n",'',$parts[1]);
		$result1 = mysqli_query($con,"INSERT INTO student_intern SET name='$name', id='$roll', branch = '2', type = '0'");
		if(!$result1) {
			echo $parts[1]."<br />";
		}
//		echo $roll.$name;
	}
}
?>