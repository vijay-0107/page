<?php
function getCPI($con,$roll_no) 
{	
	$query="SELECT * FROM cpi WHERE id ='" . $roll_no . "'";
	$result = mysqli_query($con,$query);
	if($result!=false&&mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_array($result);
		return (string)$row['cpi'];	
	}
	else
	{	
		return "NO_DATA";
	}
}
function getCPIIntern($con,$roll_no) 
{	
	$query="SELECT * FROM cpi_intern WHERE id ='" . $roll_no . "'";
	$result = mysqli_query($con,$query);
	if($result!=false&&mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_array($result);
		return (string)$row['cpi'];	
	}
	else
	{	
		return "NO_DATA";
	}
}
function getEmail($con,$roll_no)
{
	$query="SELECT * FROM email WHERE id ='" . $roll_no . "'";
	$result = mysqli_query($con,$query);
	if($result!=false&&mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_array($result);
		return (string)$row['email'] . "@iitp.ac.in";	
	}
	else
	{	
		return "NO_DATA";
	}
} 
function getEmailIntern($con,$roll_no)
{
	$query="SELECT * FROM email_intern WHERE id ='" . $roll_no . "'";
	$result = mysqli_query($con,$query);
	if($result!=false&&mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_array($result);
		return (string)$row['email'] . "@iitp.ac.in";	
	}
	else
	{	
		return "NO_DATA";
	}
} 
function getName($con,$roll_no)
{
	$query="SELECT * FROM student WHERE id ='" . $roll_no . "'";
	$result = mysqli_query($con,$query);
	if($result!=false&&mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_array($result);
		return (string)$row['name'];	
	}
	else
	{	
		return "NO_DATA";
	}
}
function getName_intern($con,$roll_no)
{
	$query="SELECT * FROM student_intern WHERE id ='$roll_no'";
	$result = mysqli_query($con,$query);
	if($result!=false&&mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_array($result);
		return (string)$row['name'];	
	}
	else
	{	
		if($result == false) 
			return "false";
		if(mysqli_num_rows($result)!=1) 
			return (string)mysqli_num_rows($result)." ".$roll_no;
		return "NO_DATA";
	}
}
function getBranch($con,$roll_no)
{
	$query="SELECT * FROM student WHERE id ='" . $roll_no . "'";
	$result = mysqli_query($con,$query);
	if($result!=false&&mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_array($result);
		return (string)$row['branch'];	
	}
	else
	{	
		return "NO_DATA";
	}
}
function getMark10($con,$roll_no)
{
	$query="SELECT * FROM mark10 WHERE id ='" . $roll_no . "'";
	$result = mysqli_query($con,$query);
	if($result!=false&&mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_array($result);
		return (string)$row['marks'];	
	}
	else
	{	
		return "NO_DATA";
	}
}
function getMark12($con,$roll_no)
{
	$query="SELECT * FROM mark12 WHERE id ='" . $roll_no . "'";
	$result = mysqli_query($con,$query);
	if($result!=false&&mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_array($result);
		return (string)$row['marks'];	
	}
	else
	{	
		return "NO_DATA";
	}
}
function getResume($roll_no) 
{	
	$result="CV/".$roll_no.".pdf";
	return $result;
}
function getPicture($roll_no) 
{	
	$result="IM/".$roll_no.".jpg";
	return $result;
}
function getBranchName($branch)
{
	if($branch==0)
		return "Computer Science and Engineering";
	if($branch==1)
		return "Electrical Engineering";
	if($branch==2)
		return "Mechanical Engineering";
	if($branch==3)
		return "Civil Engineering";
	if($branch==4)
		return "Chemical Science and Technology";
	if($branch==5)
		return "Mathematics and Computing";
	if($branch==6)
		return "Mechatronics";
	if($branch==7)
		return "Nano Science and Technology";
	if($branch==8)
		return "Communication System Engineering";
	if($branch==9)
		return "Materials Science and Engineering";
}
function getBranchNumberFromCode($code)
{
	if($code=="CS")
		return 0;
	if($code=="EE")
		return 1;
	if($code=="ME")
		return 2;
	if($code=="CE")
		return 3;
	if($code=="CH")
		return 4;
	if($code=="MC")
		return 5;
	if($code=="MT")
		return 6;
	if($code=="NT")
		return 7;
	if($code=="MS")
		return 9;
}
function getBranchCode($branch)
{
	if($branch==0)
		return "CS";
	if($branch==1)
		return "EE";
	if($branch==2)
		return "ME";
	if($branch==3)
		return "CE";
	if($branch==4)
		return "CH";
	if($branch==5)
		return "MC";
	if($branch==6)
		return "MT";
	if($branch==7)
		return "NT";
	if($branch==8)
		return "EE";
	if($branch==9)
		return "MS";
}
function makeLink($link, $text)
{
	$result="<a href='".$link."'>".$text."</a>";
	return $result;
}

function makeImage($link,$width,$height)
{
	$result="<img src='".$link."' width='".$width."' height='".$height."' />";
	return $result;
}
function line($num)
{
	for($i=0;$i<$num;$i++)
	{
		echo "<br/>";
	}
	return;
}
?>
