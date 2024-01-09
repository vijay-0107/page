<?php include("header.php"); ?>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-con-2" style="height: auto;">
			<div class="grid-block">
				<h1>Placement Cell Facilities</h1><br>
				<br>
				<div class="home-carousel">
					<div class="slideshow-container">

						<div class="mySlides fade" style="opacity: 1;">
							<img src="images/slider/p10.jpg" style="width:100%">
							<!-- <div class="captext">Caption Text</div> -->
						</div>

						<div class="mySlides fade" style="opacity: 1;">
							<img src="images/slider/p11.jpg" style="width:100%">
							<!-- <div class="captext">Caption Two</div> -->
						</div>

						<div class="mySlides fade" style="opacity: 1;">
							<img src="images/slider/p12.jpg" style="width:100%">
							<!-- <div class="captext">Caption Three</div> -->
						</div>

						<div class="mySlides fade" style="opacity: 1;">
							<img src="images/slider/p13.jpg" style="width:100%">
						</div>

						<div class="mySlides fade" style="opacity: 1;">
							<img src="images/slider/p14.jpg" style="width:100%">
						</div>

						<div class="mySlides fade" style="opacity: 1;">
							<img src="images/slider/p15.jpg" style="width:100%">
						</div>

						<div class="mySlides fade" style="opacity: 1;">
							<img src="images/slider/p16.jpg" style="width:100%">
						</div>

						<div class="mySlides fade" style="opacity: 1;">
							<img src="images/slider/p17.jpg" style="width:100%">
						</div>

						<a class="prev" onclick="plusSlides(-1)">❮</a>
						<a class="next" onclick="plusSlides(1)">❯</a>

					</div>
					<br>

					<div style="text-align:center">
							<span class="dot" onclick="currentSlide(1)"></span> 
							<span class="dot" onclick="currentSlide(2)"></span> 
							<span class="dot" onclick="currentSlide(3)"></span> 
							<span class="dot" onclick="currentSlide(4)"></span> 
							<span class="dot" onclick="currentSlide(5)"></span> 
							<span class="dot" onclick="currentSlide(6)"></span> 
							<span class="dot" onclick="currentSlide(7)"></span> 
							<span class="dot" onclick="currentSlide(8)"></span> 
					</div>
					
				</div>
				<div class="index-intro-text">
						The STPO works round the year and provides the following facilities in order to assist companies in training and recruitment process.
					<ul>
					<li>An auditorium
					<li>Conference and personal interview rooms (with internet and telephonic connectivity)
					<li>Seminar rooms
					<li>Wireless internet connectivity
					<li>Video conferencing facility
					<li>Facility to conduct online test
					</ul>
				</div>
			</div>
		</div>
		<div class="grid-con-2">
			<?php include("panel.php"); ?>
		</div>
	</div>
</div>

<script>
	let slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		let i;
		let slides = document.getElementsByClassName("mySlides");
		let dots = document.getElementsByClassName("dot");
		if (n > slides.length) {slideIndex = 1}    
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
		setTimeout(function() {
			plusSlides(1);
		}, 4000);
	}
</script>
<?php include("footer.php"); ?>
