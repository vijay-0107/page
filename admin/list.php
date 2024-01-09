<?php
	session_start();
	if(!isset($_SESSION["status"]) || $_SESSION["status"]!="true"){
		$con=mysqli_connect("localhost","joji","joji@123","company");
		//$con = mysql_connect("localhost", "root", "");
		mysql_select_db("company", $con);
		$query = "SELECT ID, NAME FROM COMPANYREGISTER WHERE permission=1 ORDER BY `date` DESC";
		$result = mysql_query($query);
		echo '<table border="1">
		<tr>
			<th>Sr.No</th>
			<th>Name</th>
			<th>JAF</th>
			<th>Job description</th>
		</tr>';
		$count = 1;
		while($row = mysql_fetch_assoc($result)){
			echo '<tr>
				<td>'.$count.'</td>
				<td>'.$row["NAME"].'</td>';
			$jaf = '../new/generate.php?id='.$row["ID"];
			$jd = '../JD/jd-'.$row["ID"].'.pdf';
			echo '<td><a href="'.$jaf.'">JAF</a></td>';
			if(file_exists($jd)){
				echo '<td><a href="'.$jd.'">Job description</a></td>';
			}else{
				echo '<td> NA </td>';
			}
			echo '</tr>';
			$count++;
		}
		echo '</table>';
	}else{

		$con = mysql_connect("localhost", "root", "");
		mysql_select_db("company", $con);
		if(isset($_GET['change'])){
			$id=$_GET['change'];
			$query = "UPDATE COMPANYREGISTER SET permission = !permission WHERE ID=".$id;
			mysql_query($query);
		}
		$query = "SELECT * FROM COMPANYREGISTER";
		$result = mysql_query($query);
		echo '<table border="1">
		<tr>
			<th>Sr.No</th>
			<th>Name</th>
			<th>Contact</th>
			<th>E-mail</th>
			<th>Phone No.</th>
			<th>Mobile No.</th>
			<th>Postal Address</th>
			<th>Fax</th>
			<th>JAF</th>
			<th>Job description</th>
			<th>Permission</th>
		</tr>';
		$count = 1;
		while($row = mysql_fetch_assoc($result)){
			echo '<tr>
				<td>'.$count.'</td>
				<td>'.$row["NAME"].'</td>
				<td>'.$row["CONTNAME"].'</td>
				<td>'.$row["EMAILID"].'</td>
				<td>'.$row["PHNO"].'</td>
				<td>'.$row["MOBNO"].'</td>
				<td>'.$row["POSTADDRESS"].'</td>
				<td>'.$row["FAX"].'</td>';
			$jaf = '../new/generate.php?id='.$row["ID"];
			$jd = '../JD/jd-'.$row["ID"].'.pdf';
			echo '<td><a href="'.$jaf.'">JAF</a></td>';
			if(file_exists($jd)){
				echo '<td><a href="'.$jd.'">Job description</a></td>';
			}else{
				echo '<td> NA </td>';
			}
			echo '<td><a href="list.php?change='.$row["ID"].'">'.$row["permission"].'</td>';
			echo '</tr>';
			$count++;
		}
		echo '</table>';
		echo '<a href="index.php?status=logout">Logout</a>';
	}
?>
