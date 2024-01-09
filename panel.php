				<div class="grid-50-l" style="width : 50%;">
					<div class="panel">
						<!--<div class="panel-head ">
							<div id="rpanel" class="panel-tab active" onclick="recruiter();">
								Recruiter
							</div>
							<div id="spanel" class="panel-tab inactive" onclick="student();">
								Student
							</div>
						</div>-->
						<div class="panel-head ">
							<div class="panel-tab panel-tab-full">
								Recruiters
							</div>
						</div>
						<div class="panel-content">
							<!--<form action="login.php" method="post">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-input" name="username" id="username" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="passwd">Password</label>
								<input type="password" class="form-input" name="password" id="passwd" placeholder="Password">
							</div>
							<input id="logintype" type="hidden" name="logintype" value="recruiter">
							<button type="submit" class="btn-submit">LOG IN</button>
							</form>
							<p id="rmessage"><label for='registr'>Interested in recruiting from IITP?</label><button id='registr' class='btn-reg' onclick='register();'>REGISTER</button></p>
							
							
							<p id="rmessage"><label for='registr'>Interested in recruiting from IITP?</label><a href="https://docs.google.com/forms/d/1PJpcL5DmvQorN1udzAh-WicJAiM1mNdg5wAURX50iqE/edit?usp=sharing" target="_blank"><button id='registr' class='btn-reg'>REGISTER</button></a></p>
							-->
							
							<p id="rmessage"><label for='registr'><snap style="font-weight: 100; font-family:'Times New Roman', Times, serif; font-size: 20px;">Kindly fill-in the form to start the process to recruit students for summer internships
	and full time role at IIT Patna in academic year 2022-23.</snap></label><a href="https://forms.gle/7etN4RzVdqK9gHaT7" target="_blank"><button id='registr' class='btn-reg'><div class="blink_me">REGISTER</div></button></a></p>
							
							
						</div>
						<script>
							function register()
							{
								window.location.href = "new.php";
							}
							
							function recruiter()
							{
								document.getElementById("logintype").value = "recruiter";
								document.getElementById("rmessage").innerHTML = "<label for='registr'>Interested in recruiting from IITP?</label><button id='registr' class='btn-reg' onclick='register();'>REGISTER WITH US</button>";
								document.getElementById("rpanel").className = "panel-tab active";
								document.getElementById("spanel").className = "panel-tab inactive";
							}
							
							function student()
							{
								document.getElementById("logintype").value = "student";
								document.getElementById("rmessage").innerHTML = "<a href=\"tpc/index.html\">Registration Form For Students</a>";
								document.getElementById("spanel").className = "panel-tab active";
								document.getElementById("rpanel").className = "panel-tab inactive";
							}
						</script>
					</div>
				</div>
				<div class="grid-50-r" style="width : 50%;">
					<div class="panel">
						<div class="panel-head ">
							<div class="panel-tab panel-tab-full" style="background-color:rgba(223, 164, 104, 0.986)">
								News & Events
							</div>
						</div>
						<div class="panel-content">
							<p><a href="downloads/files/TPC_IITP_past-recruiters_2022.pdf">Past Recruiters <img src="downloads/new.gif" /></a></p>
							<p><a href="downloads/Placement Brochure 23-24.pdf">Placements Brochure 2022-23<img src="downloads/new.gif" /></a></p>
							<p><a href="Programmes.php">Branch-wise Brochure 2022-23</a></p>
						</div>
				</div>
				</div>
			