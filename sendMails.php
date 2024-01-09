<?php
	header("content: text/html");
	$mysql = mysql_connect('localhost') or die("Oops something went wrong !");
	$db = mysql_select_db('polling', $mysql) or die("Oops something went wrong !");
	require_once('class.phpmailer.php');
	
	$query = "SELECT unregistered.index,user,conf FROM unregistered where unregistered.index = '30'";
	$result = mysql_query($query);
	//shuffle($result);
	$looppp=0;
	while($row = mysql_fetch_assoc($result))
	{
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587; // or 587
		$mail->IsHTML(true);
		$mail->Username = "iitp.polling@gmail.com";
		$mail->Password = "ayushjain";
		$mail->SetFrom("iitp.polling@gmail.com");
		//$mail->FromName = "Ayush Jain";
		$mail->Subject = "Confirmation mail for Polling";
		$user=$row['user'];
		$confirm=$row['conf'];
		$mail->Body = "please click this link\r\n\r\n"."http://172.16.1.16/polling/confirm.php"."?user=".$user."&confirmcode=".$confirm;
		$mail->AddAddress($user."@iitp.ac.in");
		if(!$mail->Send())
		{
			echo "Confirmation mail could not be sent to".$user.". Please try again later.\n";
			$looppp++;
			if($looppp >= 100)
				break;
		}
		else
		{
			echo "Confirmation mail sent to ".$user."\n";
		}
	}
?>
