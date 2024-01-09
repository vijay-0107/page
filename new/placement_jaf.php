<!-- <html>
	<link rel="stylesheet" type="text/css" href="form.css">
	<form action="generate.php" method="post"> -->
		<table>
			<tr>
				<td colspan="2"><h2>About Organisation</h2></td>
			</tr>
			<tr>
				<td>Name of Organization<span style="color:red;">*</span> :</td>
				<td><input class="form-input" type="text" name="name" required="true" ></td>			
			</tr>
			<tr>
				<td>Postal Address :</td>
				<td><textarea name="address" rows="6" cols="0" ></textarea></td>			
			</tr>
			<tr>
				<td>Website<span style="color:red;">*</span> :</td>
				<td><input class="form-input" name="website" type="website" required="true"></td>			
			</tr>
			<tr>
				<td>Type of Organization<span style="color:red;">*</span> :</td>
				<td><input class="form-input" name="type" type="text" required="true" ></td>			
			</tr>
			<tr>
				<td>Industry Sector<span style="color:red;">*</span> :</td>
				<td><input class="form-input" name="sector" type="text" required="true" ></td>			
			</tr>
			<tr>
				<td colspan="2"><h2>Contact Details</h2></td>			
			</tr>
			<tr>
				<td><h3>Head HR :</h3></td>			
			</tr>
			<tr>
				<td>Name<span style="color:red;">*</span> :</td>
				<td><input class="form-input" name="i_name[]" type="text" required="true" ></td>			
			</tr>
			<tr>
				<td>E-mail<span style="color:red;">*</span> :</td>
				<td><input class="form-input" name="email[]" type="email" required="true" ></td>			
			</tr>
			<tr>
				<td>Mobile :</td>
				<td><input class="form-input" name="mobile[]" type="text" ></td>			
			</tr>
			<tr>
				<td>Landline :</td>
				<td><input class="form-input" name="landline[]" type="text" ></td>			
			</tr>
			<tr>
				<td>Fax :</td>
				<td><input class="form-input" name="fax[]" type="text"></td>			
			</tr>
		</table>
		<div>
			<h3>Job Announcement Form</h3>
			<div class="jafbutton">Fill form</div>
		</div>
		<div class="jaf">
		<div class="tab">
		<div class="tabhead"><h2>Secondary Contacts</h2></div>
		<div class="tabbody">
		<table>
			<tr>
				<td colspan="2"><h3>First Contact Person</h3></td>			
			</tr>
			<tr>
				<td>Name :</td>
				<td><input class="form-input" name="i_name[]" type="text"></td>			
			</tr>
			<tr>
				<td>E-mail :</td>
				<td><input class="form-input" name="email[]" type="text"></td>			
			</tr>
			<tr>
				<td>Mobile :</td>
				<td><input class="form-input" name="mobile[]" type="text"></td>			
			</tr>
			<tr>
				<td>Landline :</td>
				<td><input class="form-input" name="landline[]" type="text"></td>			
			</tr>
			<tr>
				<td>Fax :</td>
				<td><input class="form-input" name="fax[]" type="text"></td>			
			</tr>
			<tr>
				<td colspan="2"><h3>Second Contact Person</h3></td>			
			</tr>
			<tr>
				<td>Name :</td>
				<td><input class="form-input" name="i_name[]" type="text"></td>			
			</tr>
			<tr>
				<td>E-mail :</td>
				<td><input class="form-input" name="email[]" type="email"></td>			
			</tr>
			<tr>
				<td>Mobile :</td>
				<td><input class="form-input" name="mobile[]" type="text"></td>			
			</tr>
			<tr>
				<td>Landline :</td>
				<td><input class="form-input" name="landline[]" type="text"></td>			
			</tr>
			<tr>
				<td>Fax :</td>
				<td><input class="form-input" name="fax[]" type="text"></td>			
			</tr>
			</table>
			</div>
			</div>
			<div class="tab">
			<div class="tabhead"><h2>Job Profile</h2></div>
			<div class="tabbody">
			<table>
			<tr>
				<td colspan="2"><h3>B. Tech.</h3></td>			
			</tr>
			<tr>
				<td>Job Designation :</td>
				<td><input class="form-input" type="text" name="b_designation" ></td>			
			</tr>
			<tr>
				<td>Job Description :</td>
				<td><textarea name="b_description" rows="6" cols="0"></textarea></td>			
			</tr>
			<tr>
				<td>Place of posting :</td>
				<td><input class="form-input" type="text" name="b_place" ></td>			
			</tr>
			<tr>
				<td colspan="2"><h3>M. Tech.</h3></td>			
			</tr>
			<tr>
				<td>Job Designation :</td>
				<td><input class="form-input" type="text" name="m_designation" ></td>			
			</tr>
			<tr>
				<td>Job Description :</td>
				<td><textarea name="m_description" rows="6" cols="0"></textarea></td>			
			</tr>
			<tr>
				<td>Place of posting :</td>
				<td><input class="form-input" type="text" name="m_place" ></td>			
			</tr>
			<tr>
				<td colspan="2"><h3>Ph.D.</h3></td>			
			</tr>
			<tr>
				<td>Job Designation :</td>
				<td><input class="form-input" type="text" name="p_designation" ></td>			
			</tr>
			<tr>
				<td>Job Description :</td>
				<td><textarea name="p_description" rows="6" cols="0"></textarea></td>			
			</tr>
			<tr>
				<td>Place of posting :</td>
				<td><input class="form-input" type="text" name="p_place" ></td>			
			</tr>
			</table>
			</div>
			</div>
			<div class="tab">
			<div class="tabhead"><h2>Salary Details</h2></div>
			<div class="tabbody">
			<table>
			<tr>
				<td colspan="2"><h3>B. Tech.</h3></td>			
			</tr>
			<tr>
				<td>Cost to Co.(CTC) :</td>
				<td><input class="form-input" type="text" name="b_ctc"></td>		
			</tr>
			<tr>
				<td>Gross :</td>
				<td><input class="form-input" type="text" name="b_gross"></td>		
			</tr>
			<tr>
				<td>Take home :</td>
				<td><input class="form-input" type="text" name="b_take_home"></td>		
			</tr>
			<tr>
				<td>Bonus/Perks/Incentives :</td>
				<td><input class="form-input" type="text" name="b_bonus"></td>		
			</tr>
			<tr>
				<td>Bond or Contract(Specific details) :</td>
				<td><input class="form-input" type="text" name="b_bond"></td>		
			</tr>
			<tr>
				<td colspan="2"><h3>M. Tech.</h3></td>			
			</tr>
			<tr>
				<td>Cost to Co.(CTC) :</td>
				<td><input class="form-input" type="text" name="m_ctc"></td>		
			</tr>
			<tr>
				<td>Gross :</td>
				<td><input class="form-input" type="text" name="m_gross"></td>		
			</tr>
			<tr>
				<td>Take home :</td>
				<td><input class="form-input" type="text" name="m_take_home"></td>		
			</tr>
			<tr>
				<td>Bonus/Perks/Incentives :</td>
				<td><input class="form-input" type="text" name="m_bonus"></td>		
			</tr>
			<tr>
				<td>Bond or Contract(Specific details) :</td>
				<td><input class="form-input" type="text" name="m_bond"></td>		
			</tr>
			<tr>
				<td colspan="2"><h3>Ph.D.</h3></td>			
			</tr>
			<tr>
				<td>Cost to Co.(CTC) :</td>
				<td><input class="form-input" type="text" name="p_ctc"></td>		
			</tr>
			<tr>
				<td>Gross :</td>
				<td><input class="form-input" type="text" name="p_gross"></td>		
			</tr>
			<tr>
				<td>Take home :</td>
				<td><input class="form-input" type="text" name="p_take_home"></td>		
			</tr>
			<tr>
				<td>Bonus/Perks/Incentives :</td>
				<td><input class="form-input" type="text" name="p_bonus"></td>		
			</tr>
			<tr>
				<td>Bond or Contract(Specific details) :</td>
				<td><input class="form-input" type="text" name="p_bond"></td>		
			</tr>
			</table>
			</div>
			</div>

			<div class="tab">
			<div class="tabhead"><h2>Selection Process</h2></div>
			<div class="tabbody">
			<table>
			<tr>
				<td colspan="2">Preference :</td>			
			</tr>
			<tr>
				<td><input type="checkbox" name="preference[]" value="On-campus hiring">On-campus hiring</td>
				<td><input type="checkbox" name="preference[]" value="Off-campus hiring">Off-campus hiring</td>
			</tr>
			<tr>
				<td colspan="2">Mode of Selection :</td>			
			</tr>
			<tr>
				<td><input type="checkbox" name="mode[]" value="Pre-Placement Talk(PPT)">Pre-Placement Talk(PPT)</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="mode[]" value="Short-Listing of Resumes">Short-Listing of Resumes</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="mode[]" value="Written Test(Technical, Aptitude)">
				Written Test(Technical, Aptitude)</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="mode[]" value="Group Disscussion">Group Discussion</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="mode[]" value="Personal Interview">Personal Interview</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="mode[]" value="Online Test">Online Test</td>
			</tr>
			<tr>
				<td>Number of rounds :</td>
				<td><input class="form-input" type="text" name="rounds" ></td>			
			</tr>
			<tr>
				<td>Eligibility criteria (CPI cutoff on a scale of 0-10) :</td>
				<td><input class="form-input" type="text" name="cpi" ></td>			
			</tr>
			<tr>
				<td>Preferred period of visit for recruitment :</td>
				<td><input class="form-input" type="text" name="period" ></td>			
			</tr>
			<tr>
				<td>Number of offers :</td>
				<td><input class="form-input" type="text" name="offers" ></td>			
			</tr>
			</table>
			</div>
			</div>
			
			<div class="tab">
			<div class="tabhead"><h2>Logistics Requirements (for On-Campus hiring)</h2></div>
			<div class="tabbody">
			<table>
			<tr>
				<td>Number of members visiting IIT Patna campus :</td>
				<td><input class="form-input" type="text" name="members" ></td>			
			</tr>
			<tr>
				<td>No. of rooms required for selection process :</td>
				<td><input class="form-input" type="text" name="rooms" ></td>			
			</tr>
			<tr>
				<td>Other requirements :</td>
				<td><textarea name="requirements" rows="6" cols="0"></textarea></td>			
			</tr>
			</table>
			</div>
			</div>
			
			<div class="tab">
			<div class="tabhead"><h2>Programs from which to select</h2></div>
			<div class="tabbody">
			<table>
			<tr>
				<td colspan="2"><h3>B. Tech. Programs :</h3></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="b_branch[]" value="Computer Science and Engineering">Computer Science and Engineering</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="b_branch[]" value="Electrical Engineering (Electronics, Electrical and Communications)">
				Electrical Engineering <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Electronics, Electrical and Communications)</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="b_branch[]" value="Mechanical Engineering">Mechanical Engineering</td>
			</tr>
			<tr>
				<td colspan="2"><h3>M. Tech. Programs :</h3></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="m_branch[]" value="Mechatronics">Mechatronics</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="m_branch[]" value="Mathematics and Computing">Mathematics and Computing</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="m_branch[]" value="Nanoscience and Technology">Nanoscience and Technology</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="m_branch[]" value="Computer Science and Engineering">Computer Science and Engineering</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="m_branch[]" value="Communication System Engineering">Communication System Engineering</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="m_branch[]" value="Mechanical Engineering">Mechanical Engineering</td>
			</tr><tr>
				<td><input type="checkbox" name="m_branch[]" value="Civil and Infrastructure Engineering">Civil and Infrastructure Engineering</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="m_branch[]" value=" Materials Science and Engineering">Materials Science and Engineering</td>
			</tr>
			<tr>
				<td colspan="2"><h3>Ph.D. :</h3></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="p_branch[]" value="Engineering and Sciences">Engineering and Sciences</td>
			</tr>
			</table>
			</div>
			</div>
			</div>
			<table>
			<h2>OR</h2>
			<tr>
				<td>Upload file(PDF) : </td><td><input type="file" class="form-input-file" name="job-description"></td><td><label id="jobdescriptionlabel"></label></td>
			</tr>
<!-- 		</table>	
		<input class="form-input" type="submit" value="Submit">
	</form>
</html>	 -->