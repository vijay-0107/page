<!DOCTYPE html>
<html>
	<head>
		<title>Centre For Career Development and Counselling - IIT Patna</title>
		<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
		<link href="slick/slick.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="style.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="jquery/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="jquery/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


		<script type="text/javascript">
			$(document).ready(function(){
				$('.home-carousel').slick({
					autoplay: true,
					autoplaySpeed: 2000
				});
			});
		</script>
		<script type="text/javascript">
			// let navbarDiv = document.querySelector('.full-head');
			// window.addEventListener('scroll', () => {
			// 	if(document.body.scrollTop > 40 || document.documentElement.scrollTop > 40){
			// 		navbarDiv.classList.add('full-head-cng');
			// 	} else {
			// 		navbarDiv.classList.remove('full-head-cng');
			// 	}
			// });
			// $(function() {
				$(window).on("scroll", function() {
					if($(window).scrollTop() > 50) {
						$(".full-head").addClass("full-head-cng");
						$(".head-mid-1").addClass("head-mid-1-cng");
					} 
					else {
						//remove the background property so it comes transparent again (defined in your css)
						$(".full-head").removeClass("full-head-cng");
						$(".head-mid-1").removeClass("head-mid-1-cng");
					}
				});
				$(window).on("scroll", function() {
					if($(window).scrollTop() > 65) {
						document.getElementsByClassName("norm-head").style.height = "90px";
					} 
					else {
						//remove the background property so it comes transparent again (defined in your css)
						document.getElementsByClassName("norm-head").style.height = "170px";				
					}
				});
			// });
		</script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$(document).ready(function () {
				// Toggle the navigation bar when the mobile menu toggle button is clicked
				$(".mobile-menu-toggle").click(function () {
					$(".navbar").toggleClass("active");
				});
			});
		</script>

	</head>
	<body>
		<div class="full-head">
			<div class="head-left">
				<a href="http://www.iitp.ac.in/placement/">
					<div class="college-logo">
						<img src="images/iitp2.png" style="padding:0px 0px 0px 0px; height: 90%;"/>
					</div>
				</a>
			</div>
			<div class="head-mid">	
				<div class="head-mid-1">
				<div class="mobile-menu-toggle">
						<i class="fas fa-bars" style="size: auto;"></i>
					</div>
					<div class="navbar-collapse scrollspy smooth-scroll collapse" id="nav" style="padding:0px;">
						<ul>
							<li><a href="index.php"> Home </a>
							</li>
							<li><a>About Us</a>
								<ul>
									<li><a href="message.php">Message</a></li>
									<li><a href="acadtieups.php">Academic Tieups</a></li>
									<li><a href="tour.php">Campus Tour</a></li>
									<li><a href="activities.php">Activities</a></li>
								</ul>
							</li>
							<li><a href="procedure.php">Recruiters Corner</a>
							<ul>
								<li><a href="fac.php">Facilities</a></li>
								<li><a href="procedure.php">Placement Procedure</a></li>
								<li><a href="downloads/files/TPC_Policy_for_recruiters.pdf">TPC Policy for recruiters</a></li>
								<li><a href="Programmes.php">Programmes</a></li>
							</ul>
							</li>
							
							<li><a href="events.php">Training Events</a>
							<li><a href="https://www.iitp.ac.in/acad/">Academics</a>
							
							
							</li>
							<li><a href="pastRec.php">Placement Records</a>
				
							<ul>
								<li><a href="pastRec.php">Past Recruiters</a></li>
								<li><a href="placementsumm.php">Placement Statistics</a></li>
								<li><a href="trainingsumm.php">Internship provider</a></li>
							</ul>
							</li>
							<li><a href="contactus.php">Contact Us</a>
							<ul>
								<li><a href="contactus.php">Representatives</a></li>
								<li><a href="howtoreach.php">Reaching IITP</a></li>
							</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="head-mid-2">
				<div class="news-container">
						<a href="https://forms.gle/FdDpWF3dgKx9iQLB6" target="_blank">
							<div class="title">
								Register
							</div>
						</a>
						<div class="hwrap"><div class="hmove">
							<div class="hitem">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							<div class="hitem">Aliquam consequat varius consequat.</div>
							<div class="hitem">Fusce dapibus turpis vel nisi malesuada sollicitudin.</div>
							<div class="hitem">Pellentesque auctor molestie orci ut blandit.</div>
						</div></div>
						<!-- <ul>
							<li>
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam!
							</li>
							
							<li>
								Lorem ipsum dolor sit
							</li>

							<li>
								Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam!
							</li>
						</ul> -->
						<!-- <div class="butn" style="width:fit-content; margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
							<p><a href="https://forms.gle/FdDpWF3dgKx9iQLB6" target="_blank"><button id='registr' class='btn-reg'><div class="blink_me" style="font-size: 15px;">REGISTER</div></button></a></p>
						</div> -->
						<!-- <a href="http://www.iitp.ac.in/placement/">
							<div class="college-text" style="padding-left:22px;padding-top:18px;">
								<span style="font-size:25pt;">Centre for Career Development</span><br /><span style="font-size:17pt;">कैरियर विकास केंद्र</span><br />
								<h4>Indian Institute of Technology Patna<br /><span style="font-size:15pt;">भारतीय प्रौद्योगिकी संस्थान पटना</span></h4>
							</div>
						</a> -->
					</div>
					<!-- <a href="http://www.iitp.ac.in/placement/">
						<div class="college-text" style="padding-left:22px;padding-top:18px;">
							<span style="font-size:25pt;">Centre for Career Development</span><br /><span style="font-size:17pt;">कैरियर विकास केंद्र</span><br />
							<h4>Indian Institute of Technology Patna<br /><span style="font-size:15pt;">भारतीय प्रौद्योगिकी संस्थान पटना</span></h4>
						</div>
					</a> -->
				</div>
			</div>
		</div>
		<!-- <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="header navbar">
			<a href="http://www.iitp.ac.in/placement/">
			<div class="college-logo">
				<img src="images/iitp2.png" style="padding-top:10px;"/>
				<div class="college-text" style="padding-left:22px;padding-top:18px;">
					<span style="font-size:25pt;">Centre for Career Development</span><br /><span style="font-size:17pt;">कैरियर विकास केंद्र</span><br /> -->
					<!-- <h4>Indian Institute of Technology Patna<br /><span style="font-size:15pt;">भारतीय प्रौद्योगिकी संस्थान पटना</span></h4> -->
				<!-- </div>
			</div>
			</a>
			<div class="navbar-collapse scrollspy smooth-scroll collapse" id="nav">
				<ul>
						<li><a href="index.php">About Us</a>
					<ul>
						<li><a href="index.php">CCD</a></li>
						<li><a href="message.php">Message</a></li>
						<li><a href="acadtieups.php">Academic Tieups</a></li>
						<li><a href="tour.php">Campus Tour</a></li>
						<li><a href="activities.php">Activities</a></li>
					</ul>
					</li>
					<li><a href="procedure.php">For Recruiters</a>
					<ul>
						<li><a href="fac.php">Facilities</a></li> -->
						<!--<li><a href="demographics.php">Demographics</a></li> -->
						<!-- <li><a href="procedure.php">Placement Procedure</a></li> -->
					<!--	<li><a href="downloads.php">Downloads</a></li>-->
						<!-- <li><a href="downloads/files/TPC_Policy_for_recruiters.pdf">TPC Policy for recruiters</a></li> -->
						<!-- <li><a href="Programmes.php">Programmes</a></li> -->
					<!--	<li><a href="studentsprofile.php">Student Profiles</a></li>	-->
					<!-- </ul> -->
					<!-- </li> -->
					<!-- <li><a href="internships.php">Alumni</a>	-->
					<!--<li><a href="#">Alumni</a>
					<ul>
						<li><a href="downloads.php">Downloads</a></li>
						<li><a href="demo.php">Demographics</a></li>
						<li><a href="fac.php">Facilities</a></li>
						<li><a href="internships.php">Student Profiles</a></li>
					</ul>
					</li>-->
					<!-- <li><a href="https://www.iitp.ac.in/acad/">Academics</a> -->
					<!--
					<ul>
						<li><a href="http://www.iitp.ac.in/index.php/academics/programmes/undergraduate/undergraduate.html">Departments</a></li>
						<li><a href="http://www.iitp.ac.in/index.php/academics/programmes/undergraduate/course-curriculum.html">Course Curriculum</a></li>
						<li><a href="http://www.iitp.ac.in/index.php/academics/programmes/undergraduate/syllabus.html">Syllabus</a></li>
					</ul>
					-->
					<!-- </li>
		
					<li><a href="pastRec.php">Placement</a>
		
					<ul>
						<li><a href="pastRec.php">Recruiters</a></li>
						<li><a href="placementsumm.php">Placement Statistics</a></li>
						<li><a href="trainingsumm.php">Internship provider</a></li>
					</ul>
					</li>
					<li><a href="contactus.php">Contact Us</a>
					<ul>
						<li><a href="contactus.php">Representatives</a></li>
						<li><a href="howtoreach.php">Reaching IITP</a></li>
						<li><a href="hotels.php">Nearby Hotels</a></li>
					</ul>
					</li>
				</ul>
			</div>
			<div class="main-heading">
				
			</div>
		</div> -->
