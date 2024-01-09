<?php
	header('Content-type: text/html');
	require_once('var.php');
	if(empty($_POST['login']) || empty($_POST['password']))
	{
		echo "Invalid parameters.";
		exit();
	}
	$user = strtolower(trim($_POST['login']));
	$pass = trim($_POST['password']);
	$pattern = '/^[a-z0-9_\.]{1,50}$/';
	preg_match($pattern, $user, $matches, PREG_OFFSET_CAPTURE, 0);
	if(sizeof($matches)!=1)
	{
		echo "Invalid parameters.";
		exit();
	}
	$pattern = '/^[a-zA-Z0-9]{8,50}$/';
	preg_match($pattern, $pass, $matches, PREG_OFFSET_CAPTURE, 0);
	if(sizeof($matches)!=1)
	{
		echo "Invalid parameters.";
		exit();
	}
	
	//check user and pass for sql injections
	
	//$mysql = mysql_connect($databaseurl) or die (mysql_error());
	require_once('db.php');
	
	$user = mysql_real_escape_string($user);
	$pass = mysql_real_escape_string($pass);
	
	//$db = mysql_select_db($database, $mysql) or die (mysql_error());
	$result = mysql_query("select * from ".$registered." where user = '".$user."'") or die (mysql_error());
	
	$cc = 0;
	$branch = '';
	$userid = 0;
	$rr = mysql_num_rows($result);
	if($rr > 1)
	{
		//gadbad waise esa hoga kabhi ni
		$cc = -1;
	}
	else if($rr == 1)
	{
		//$cc = 0;
		$row = mysql_fetch_assoc($result);
   		if($row['user'] === $user)
		{
			$cc = 1;
			$userid = $row['id'];
			if($row['pass'] === $pass)                        //do salting and hashing encrypt and send over network
			{
				$cc = 2;
				$branch = $row['branch'];
			}
		}
	}
	
	if($cc == 0)
	{
		$confirm = rand(1000000000, 9999999999);
		
		//sending confirmation mail
		require_once('class.phpmailer.php');
		
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
		$mail->Body = "please click this link\r\n\r\n".$conflink."?user=".$user."&confirmcode=".$confirm;
		$mail->AddAddress($user."@iitp.ac.in");
		if(!$mail->Send())
		{
			echo "Confirmation mail could not be sent. Please try again later.";
		}
		else
		{
			//first check if user exists
			$query1 = "update ".$unregistered." set pass = '".$pass."' , conf = '".$confirm."' , time = NOW() where user = '".$user."'";
			mysql_query($query1) or die (mysql_error());
			if(mysql_affected_rows() == 0)
			{
				$query2 = "insert into ".$unregistered." values ('0','".$user."','".$pass."','".$confirm."',NOW())";
				$result = mysql_query($query2) or die (mysql_error());
				if($result)
					echo "A verification link has been sent to this email. Thanks for participating !";
				else
					echo "Error occured while registering user. Please try again later.";
			}
			else
				echo "Another verification link has been sent to this email. Thanks for participating !";
		}
	}
	else if($cc == 1)
	{
		echo "Incorrrect password ! Please try again or contact the admin.";
	}
	else if($cc == 2)
	{
		session_start();
		$_SESSION['userid'] = $userid;
		$_SESSION['user'] = $user;
		$_SESSION['branch'] = $branch;
		echo "SUCCESS";
	}
	mysql_close($mysql);
?>