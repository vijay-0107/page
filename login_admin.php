<?php include("header.php"); 
	session_start();
	if(isset($_SESSION["username"])) {
		session_destroy();
		echo "session destroyed";
	}
	if(isset($_POST["submit"])) {
		if(isset($_POST["username"])) {
			$uname = strip_tags($_POST["username"]);
			if(isset($_POST["pwd"])) {
				$pwd = strip_tags($_POST["pwd"]);
				if($uname == "tpc_intern" && $pwd == "trainingpc") {
					$_SESSION["username"] = $uname;
					header("Location: update_intern.php");
				} else {
					header("Location: index.php");
				}
			}
		}
	}
?>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-80">
			<div class="grid-block">	
				<div class="index-intro-text">
					<form method="post" class="form-group" onSubmit="return newval(this)" action="login_admin.php">
		<p><strong>Login here for updating student related information</strong></p><br>
		<table>
		<tr>
		<td width="33%">User name: </td><td width="33%"><input class="form-input" type="text" size="50" name="username" required=true></td><td width="33%"><label id="username"></label></td>
		</tr>
        <tr>
		<td>Password : </td><td><input class="form-input" type="password" name="pwd" required=true></td><td><label id="password"></label></td>
		</tr>
         <tr>
		<td>Verification : </td><td> <img src="captcha/CaptchaSecurityImages.php?width=100&height=40&characters=5" /><br /><input id="cap" name="security_code" class="form-input" required=true type="text"/></td><td><label id="security_codelabel"></label></td>
		</tr>
       	</table>
		<input type="submit" style="width: 25%;" name="submit" id="buttonform" class="btn-submit" value="Login">
		</form>
				</div>
			</div>
		</div>
		<div class="grid-20">
			<?php include("panel.php"); ?>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
