<?php include("header.php");
include("functions.php"); ?>
<link href="jquery.tablesorter/themes/blue/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery.tablesorter/jquery.tablesorter.js"></script> 
<script type="text/javascript">
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
);
</script>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-80">
			<div class="grid-block">	
				<div class="index-intro-text">
					

<?php

$branch = $_GET['branch'];
if( preg_match('/^[0-8]$/',$branch) != 1 ){
	$branch = 0;
}

$type = $_GET['type']; $type = ($type==0 || $type==1  ) ? $type : 0;
$branchName= getBranchName($branch);
$branchCode= getBranchCode($branch);
echo "<h2>". $branchName."</h2><hr />";


$con=mysqli_connect("localhost","joji","joji@123","company");
//$con=mysqli_connect("localhost","root","","company");
$query="SELECT * FROM student_intern WHERE RollNo LIKE '%".$branchCode."%'";

$result = mysqli_query($con,$query);

?>

<p> Click to view Profile </p>
<table style="width:100%;" id="myTable" class="tablesorter">
<thead>
<tr>
	<th style="width:25%;">Name</th>
	<th style="width:25%;">Roll Number</th>
	<th style="width:25%;">CPI</th>
	<th style="width:25%;">Email</th>
</tr>		
</thead>
<tbody>
<?php
while($row = mysqli_fetch_array($result)) 
{
	$name= $row['Name'];
	$id=$row['RollNo'];
	$cpi= $row['cpi'];
	$email= $row['email']."@iitp.ac.in";
	$link='<a href= "student_intern.php?id=' . $id . '">' . $name . '</a>';
	echo "<tr>";
	echo "<td>" . $link . "</td>";
	echo "<td>" . $id . "</td>";
	echo "<td>" . $cpi . "</td>";
	echo "<td>" . $email . "</td>";
	echo  "</tr>";
}
?>
</tbody>
</table>

				</div>
			</div>
		</div>
		<div class="grid-20">
			<?php include("panel.php"); ?>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
