<?php include("header.php"); ?>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-con-2" style="height: auto;">

			<h1 style="font-size: 30px;">CCDC Office</h1>
			<p>Centre For Career Development and Counselling (CCDC) of the institute handles all aspects of placements at IIT Patna for the graduating students of all departments. Right from contacting companies to managing all logistics of arranging for tests, pre placement talks and conducting final interviews the Training and Placement Cell officials and volunteers provide their best possible assistance to the recruiters.</p>
			<p>Interested companies can directly contact through the contacts given below and you can reach us on the address given below</p>
			<button type="button" class="collapsible">Contact Us</button>
			<div class="collapsecontent">
			<p>Email: <span style="color:#0000FF;font-weight:bold;">tpc@iitp.ac.in</span> & <span style="color:#0000FF;font-weight:bold;">pic_tnp@iitp.ac.in</span><br /> Contact Number:  <span style="color:#0000FF;font-weight:bold;">+91-6115-233 091/083</span> and <span style="color:#0000FF;font-weight:bold;">+91-8102917501</span></p>
			</div>
			<button type="button" class="collapsible">Reach Us</button>
			<div class="collapsecontent">
			<p>
			IIT Patna, situated in the ancient city of Patna on the banks of the Ganga, embodies a fusion of modern education and historical heritage. Nearby, you can explore Nalanda's ancient learning center, Bodhgaya's spiritual significance, Vaishali's birthplace of democracy, Rajgir associated with Lord Mahavira, and Taregana, where mathematician Aryabhata once worked. This location offers students a unique blend of academic excellence and cultural richness.
			</p>
			<h1>By Rail</h1>
			<p>
			Patna junction (PNBE) is served by direct trains from all parts of the country such as Delhi, Mumbai, Kolkata, Chennai, Hyderabad, Bangalore, Lucknow, Kanpur, Guwahati, Puri, and Vasco-de-Gamma among many others. After reaching Patna Junction, you can take a taxi or an auto-rickshaw to reach IIT Patna. The campus is approximately 30-40 minutes away from the railway station.
			</p>
			<div style="width:700px;overflow:hidden;height:500px;max-width:100%;">
			<div id="embed-map-display" style="height:100%; width:100%;max-width:100%;">
			<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Patna+Railway+Station,+Patna,+India&destination=IIT+Patna+Bihta+Campus,+Bihta+Road,+Bihta,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
			</div><a class="google-maps-code" href="https://www.bootstrapskins.com" id="authorize-maps-data">bootstrap themes</a><style>#embed-map-display img{max-width:none!important;background:none!important;font-size: inherit;}</style></div>

				<br>
				<h1>By Air</h1>
				<p>
				Jay Prakash Narayan International Airport, Patna (PAT) is the nearest airport to IIT Patna, located about 10 kilometers away. The airport has direct flights to Delhi, Mumbai, Kolkata, and Bangalore with good connectivity to other cities of India. After landing at the airport, you can hire a taxi or use a ride-sharing service like Uber or Ola to reach the campus. The journey typically takes around 30 minutes, depending on traffic conditions. 
				</p>
			<div style="width:700px;overflow:hidden;height:500px;max-width:100%;">
			<div id="embed-map-display" style="height:100%; width:100%;max-width:100%;">
			<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Jay+Prakash+Narayan+International+Airport,+Patna,+Bihar,+India&destination=IIT+Patna+Bihta+Campus,+Bihta+Road,+Bihta,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
			</div><a class="google-maps-code" href="https://www.bootstrapskins.com" id="authorize-maps-data">bootstrap themes</a><style>#embed-map-display img{max-width:none!important;background:none!important;font-size: inherit;}</style></div>
			</div>
		</div>
	</div>
</div>
		<div class="grid-con-2">
			<?php include("panel.php"); ?>
		</div>
	</div>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var collapsecontent = this.nextElementSibling;
    if (collapsecontent.style.display === "block") {
      collapsecontent.style.display = "none";
    } else {
      collapsecontent.style.display = "block";
    }
  });
}
</script>
<?php include("footer.php"); ?>
