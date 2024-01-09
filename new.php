<html>
	<script type="text/javascript">
	function openwindow (url) {
	   var win = window.open(url, "window1", "width=600,height=400,status=yes,scrollbars=yes,resizable=yes");
	   win.focus();
	}
	</script>
</html>
<?php include("header.php"); 
if (!session_id())
	session_start();?>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-80">
			<div class="grid-block">	
				<div class="index-intro-text">
					<form method="post" class="form-group" onSubmit="return newval(this)" action="newregister.php" 
					enctype="multipart/form-data">
		<p><strong>Register here with valid contact details to recruit students from IIT Patna through campus placements.</strong><br>
		Fields marked with <span style="color:red;">*</span> are mandatory.</p><br>
       	<?php
       		include("new/placement_jaf.php");
       	?>
       	<tr>
		<td colspan="2"><h3>Verification : </h3></td>
		</tr>
		<tr>
		<td> <img src="captcha/CaptchaSecurityImages.php?width=100&height=40&characters=5" /><br /></td>
		<td><input id="cap" name="security_code" class="form-input" required=true type="text"/></td><td><label id="security_codelabel"></label></td>
		</tr>
       	</table>
		<input type="submit" style="width: 25%;" name="submit" id="buttonform" class="btn-submit" value="Register">
		</form>
		<!-- <button value="send" onclick="openwindow('http://google.com')">Fill Job Announcement Form</button> -->
				</div>
			</div>
		</div>
		<div class="grid-20">
			<?php include("panel.php"); ?>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>
<script>

(function($) { 
     $(document).ready(function(){
        $('.tabbody').hide();
        $('.jaf').hide();
        $('.jafbutton').click(function(){
           $(".jaf").slideToggle();
        });
        $('.tabhead').click(function(){
           $(this).next().slideToggle();
        });
     });
})(jQuery);
</script>