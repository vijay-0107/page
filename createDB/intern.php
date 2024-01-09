<?php
	$con=mysqli_connect("localhost","root","","company");
	$query = "SELECT * FROM student_intern LIMIT 1";
	$result = mysqli_query($con, $query);
	echo "Started<br>";
	if(empty($result)) {
                $create_query = "CREATE TABLE student_intern (RollNo VARCHAR(8) PRIMARY KEY, 
												Name VARCHAR(50) NOT NULL, 
												cpi REAL NOT NULL,
												email VARCHAR(20) NOT NULL)";
                $result = mysqli_query($con, $create_query);
                if ($result){
                	echo "table created";
                }else{
                	echo "error occured";
                }
	}else{
		echo "table prrsent";
	}
	$file = fopen("../intern.csv","r");
	while($entry = fgets($file)){
		$array = explode(",",$entry);
		$loc = stripos($array[3], "@"); 
		if($loc){
			$array[3]=substr($array[3], 0, $loc);
		}
		$query = "INSERT INTO student_intern VALUES('".$array[0]."', '".strtoupper($array[1])."', '".$array[2]."', '".$array[3]."');";
		echo $query."<br>";
		$result = mysqli_query($con, $query);
		if ($result){
			echo "inserted<br>";
		}else{
			echo "not inserted<br>";
		}
	}
	
	fclose($file);
?>