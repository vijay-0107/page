<?php

/*Students Profile
 *student/profile.php 
 *=======================
 */
     //  $id = addslases($_REQUEST['id']);
	   
	   
	    if(!isset($_GET['value'])){
	   $username = $_COOKIE['rollno'];
		}
		else{
		$username = $_GET['value'];	
		}
       $selectProfile = "SELECT * FROM cv WHERE rollNo='".$username."' ";
	   
	   $profile = mysql_query($selectProfile);
       if(mysql_num_rows($profile)==0) { 
           echo "Profile not created";
       }else {
       	$row = mysql_fetch_array($profile,MYSQL_ASSOC);
		    	
		     echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"  
		     			height="200" width="200" alt="Profile Photo">';
		     echo '<hr> <h4>PERSONAL INFORMATION:</h4>
		          <table>
		            <tr>
					   <td>FULL NAME:</td>
                       <td>'.$_COOKIE['name'].'</td>
					</tr>  
                    <tr>
					   <td>BIRTHDAY:</td>
                       <td>'.$row['bday'].'</td>
					</tr>  					
                    <tr>
					   <td>HOMETOWN:</td>
                       <td>'.$row['htown'].'</td>
					</tr>
                  </table>
                  <hr>
				  <h4>PERFORMANCE:</h4>';
				  $marks = unserialize($row["marks"]);
				  echo '<table border=1>
		            <tr>
		            	<th>Semester</th>
		            	<td>1</td>
		            	<td>2</td>
		            	<td>3</td>
		            	<td>4</td>
		            	<td>5</td>
		            	<td>6</td>
		            	<td>7</td>
		            	<td>8</td>
						</tr>  
	               <tr>
					   	<th>SPI:</th>
                     <td>'.$marks[1].'</td>
                     <td>'.$marks[2].'</td>
                     <td>'.$marks[3].'</td>
                     <td>'.$marks[4].'</td>
                     <td>'.$marks[5].'</td>
                     <td>'.$marks[6].'</td>
                     <td>'.$marks[7].'</td>
                     <td>'.$marks[8].'</td>
						</tr> 
						<tr>
							<th>CPI :</th>
							<td>'.$marks[0].'</td>
						</tr>
				  </table>
				  <hr>';
				  $education = unserialize($row['education']);
				  echo '<h4>Education :</h4>
				  		<table>';
				  foreach($education as $value) {
					echo ' 
						<tr>
							<td>'.$value['school'].", ".$value['ed'].", ".$value['score'].', '.$value['e_year'].'</td>
						</tr>';
				}
				echo '</table>
				<hr>
				<h4>Skills :</h4>
				Curricular : ';
				$c_skills = unserialize($row['c_skills']);
				echo implode(", ", $c_skills)."<br><br>";
				echo 'Extra Curricular : ';
				$e_skills = unserialize($row['e_skills']);
				echo implode(", ", $e_skills)."<br><hr>";
				echo 'Projects :
				<table>';
				$project = unserialize($row['project']);
				foreach($project as $value) {
					echo '<tr>
						<td>'.$value['title'].'</td>
						<td>'.$value['time'].'</td>
					</tr>
					<tr>
						<td colspan="2">
						<pre>'.$value['description'].'</pre>						
						</td>
					</tr>';
				}	
				echo '</table>	
				<hr>
				Work Experience :		
				<table>';
				$work = unserialize($row['work']);
				foreach($work as $value){
				echo '<tr>
					<td>'.$value['title'].'</td>
					<td>'.$value['company'].'</td>
					</tr>
					<tr>
					<td>'.$value['time'].'</td>
					</tr>
					<tr>					
					<td colspan="2"><pre>'.$value['description'].'</pre></td>
					</tr>';
				}
				echo '</table>
				<hr>
				Others :			
				<table>';
				$others = unserialize($row['others']);
				foreach($others as $value){
					echo '<tr>
						<td>'.$value['title'].'</td>
						</tr>
						<tr>
						<td><pre>'.$value['title'].'</pre></td>
					</tr>';	
				}
				echo '</table>';
       }

?>

<html>
<head>

      <!-- HTML Headers and Links to CSS -->
	 
</head>
<body>
           
   <?php
           
	?>		 
</body>
</html>