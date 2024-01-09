<?php
	$con=mysqli_connect("localhost","joji","joji@123","company");
	//$con = mysql_connect("localhost", "root", "");
	if (!$con) {
	    die("Connection failed: " . mysql_error());
	} 
	mysql_select_db("company", $con);
	$query = "CREATE TABLE COMPANYREGISTER (`ID` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
														`NAME` VARCHAR(70) NOT NULL,
														`CONTNAME` VARCHAR(50) NOT NULL,
														`EMAILID` VARCHAR(50) NOT NULL,
														`PHNO` VARCHAR(15) NOT NULL,
														`MOBNO` VARCHAR(50) NOT NULL,
														`POSTADDRESS` VARCHAR(150) NOT NULL,
														`FAX` VARCHAR(15) NOT NULL )";
	if (mysql_query($query) === TRUE) {
	    echo "Table COMPANYREGISTER created successfully";
	} else {
	    echo "Error creating table: " . mysql_error($con);
	}
														
?>