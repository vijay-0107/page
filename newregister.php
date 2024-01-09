<?php include("header.php"); 
if (!session_id())
	session_start();?>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-80">
			<div class="grid-block">	
				<div class="index-intro-text">
				<?php
   if(isset($_POST["submit"]) && (!empty($_SESSION['security_code']))&& ($_SESSION['security_code'] == $_POST['security_code']) ) {
 
    // Your code here to handle a successful verification
	$con=mysql_connect("localhost","root","S12@R@m#576#");
	//$con=mysql_connect("localhost","root","");

	if(!$con)
	{
		echo "ERROR";
	}
	
	$name=$_POST['name'];
	$name=mysql_real_escape_string($name);
	
	$contname=$_POST['i_name'][0];
	$contname=mysql_real_escape_string($contname);
	
	$emailid=$_POST['email'][0];
	$emailid=mysql_real_escape_string($emailid);
	
	$phno=$_POST['landline'][0];
	$phno=mysql_real_escape_string($phno);
	
	$mobno=$_POST['mobile'][0];
	$mobno=mysql_real_escape_string($mobno);
	
	$postaddress=$_POST['address'];
	$postaddress=mysql_real_escape_string($postaddress);
	
	$fax=$_POST['fax'][0];
	$fax=mysql_real_escape_string($fax);

	$serialized=serialize($_POST);
	$serialized=mysql_real_escape_string($serialized);
	
	mysql_select_db("COMPANY",$con);
	
	$query="INSERT INTO company.COMPANYREGISTER (`NAME`,`CONTNAME`,`EMAILID`,`PHNO`,`MOBNO`,`POSTADDRESS`,`FAX`, `serialized`) 
	VALUES ('$name','$contname','$emailid','$phno','$mobno','$postaddress','$fax', '$serialized');";
	

	if (!mysql_query($query,$con))
	  {
	  	die('Failed!'.mysql_error());
	  }
	  else
	  {
	  		echo "You have successfully registered with IIT Patna.<br>";
	  		$id = mysql_insert_id();	  		
	  		//Upload file
	  // 		if(is_uploaded_file($_FILES["jaf"]["tmp_name"])){
		 //  		$target_dir = "JAF/";
			// 	$target_file = $target_dir . basename("jaf-".$id.".pdf");
			// 	$uploadOk = 1;
			// 	$FileType = mime_content_type($_FILES["jaf"]["tmp_name"]);
			// 	// Check if file already exists
			// 	if (file_exists($target_file)) {
			// 	    echo "Sorry, file cannot be uploaded.";
			// 	    $uploadOk = 0;
			// 	}
			// 	// Check file size
			// 	if ($_FILES["jaf"]["size"] > 500000) {
			// 	    echo "Sorry, your file is too large.";
			// 	    $uploadOk = 0;
			// 	}
			// 	// Allow certain file formats
			// 	if($FileType != "application/pdf") {
			// 	    echo "Sorry, only PDF files are allowed.";
			// 	    $uploadOk = 0;
			// 	} else {
			// 	    if (move_uploaded_file($_FILES["jaf"]["tmp_name"], $target_file)) {
			// 	        echo "The file ". basename( $_FILES["jaf"]["name"]). " has been uploaded.\n\n";
			// 	    } else {
			// 	        echo "Sorry, there was an error uploading your file.";
			// 	    }
			// 	}
			// } else {
			//     echo "Sorry, there was an error uploading your JAF file.";
			// }
			if(isset($_FILES["job-description"]) && is_uploaded_file($_FILES["job-description"]["tmp_name"])){
		  		$target_dir = "JD/";
				$target_file = $target_dir . basename("jd-".$id.".pdf");
				$uploadOk = 1;
				$FileType = mime_content_type($_FILES["job-description"]["tmp_name"]);
				
				// Check if file already exists
				if (file_exists($target_file)) {
				    echo "Sorry, file cannot be uploaded.";
				    $uploadOk = 0;
				}
				// Check file size
				if ($_FILES["job-description"]["size"] > 500000) {
				    echo "Sorry, your file is too large.";
				    $uploadOk = 0;
				}
				// Allow certain file formats
				if($FileType != "application/pdf") {
				    echo "Sorry, only PDF files are allowed.";
				    $uploadOk = 0;
				} else {
				    if (move_uploaded_file($_FILES["job-description"]["tmp_name"], $target_file)) {
				        echo "The file ". basename( $_FILES["job-description"]["name"]). " has been uploaded.\n\n";
				    } else {
				        echo "Sorry, there was an error uploading your file.";
				    }
				}
			}
			include("class.phpmailer.php");
			$mail = new PHPMailer(); // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 465; // or 587
			$mail->IsHTML(true);
			$mail->Username = "trainingandplacement.iitp@gmail.com";
			$mail->Password = "opecerteakeramandbarycerapsysitentholkannalorackle";
			$mail->SetFrom("trainingandplacement.iitp@gmail.com");
			$mail->Subject = "New Company Registration on Website";
			$mail->Body = "Name of Organisation: $name,\n\n".
						  "Name of Contact Person: $contname,\n\n".
						  "Email ID: $emailid,\n\n".
						  "Contact Phone Number: $phno,\n\n".
						  "Mobile: $mobno,\n\n".
						  "Postal Address: $postaddress,\n\n".
						  "Fax: $fax";
			$mail->AddAddress("tpc@iitp.ac.in");
			
			if(!$mail->Send())
			{
				//echo "Failed!";
			}
			else
			{
				echo "Registered Successfully. We will contact you soon.";
			}
	  }
	 mysql_close($con);


 unset($_SESSION['security_code']);
   } else {
   echo "Wrong verification text entered. Please try again.";
   }
//}
?>
				</div>
			</div>
		</div>
		<div class="grid-20">
			<?php include("panel.php"); ?>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
