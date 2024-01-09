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
$type = $_GET['type'];
$branchName= getBranchName($branch);
echo "<h2>". $branchName."</h2><hr />";

# change in final version
$con=mysqli_connect("localhost","joji","joji@123","company");
//$con=mysqli_connect("localhost","root","","company");


$query="SELECT * FROM student WHERE branch = '".$branch."' and type = '".$type."'";
$result = mysqli_query($con,$query);

?>

<p> Click to view Profile </p>
<table style="width:100%;" id="myTable" class="tablesorter">
<thead>
<tr>
	<th style="width:20%;">Name</th>
	<th style="width:20%;">Roll Number</th>
	<th style="width:20%;">CPI</th>
	<th style="width:20%;">Email</th>
</tr>		
</thead>
<tbody>
<?php
while($row = mysqli_fetch_array($result)) 
{
	$name= $row['name'];
	$id=$row['id'];
	$cpi= getCPI($con,$id);
	$email= getEmail($con,$id);
	$link='<a href= "student.php?id=' . $id . '">' . $name . '</a>';
	//echo $link . " ".$id." ". $cpi . " ";
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
