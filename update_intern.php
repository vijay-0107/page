<?php 
	include("header.php"); 
	session_start();
	if(!isset($_SESSION["username"])) {
		header("Location: index.php");
	}
?>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-80">
			<div class="grid-block">	
				<div class="index-intro-text">
					<form method="post" class="form-group" onSubmit="return newval(this)" action="update_intern.php">
		<p><strong>Update here</strong></p><br>
		<table>
		<tr>
		<td width="33%">Roll No: </td><td width="33%"><input class="form-input" type="text" size="50" name="name" required=true></td><td width="33%"><label id="rollno"></label></td>
		</tr>
        <tr>
		<td>CPI: </td><td><input class="form-input" type="text" name="contname"></td><td><label id="cpi"></label></td>
		</tr>
        <tr>
		<td>Upload CV: </td><td><input type="file" accept="application/pdf" /> <label id="fileupload"></label></td>
		</tr>
       	</table>
		<input type="submit" style="width: 25%;" name="submit" id="buttonform" class="btn-submit" value="Update">
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
