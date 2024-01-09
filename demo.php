<?php include("header.php"); ?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<div class="wrap">
	<div class="grid-container">
		<div class="grid-80">
			<div class="grid-block">
				<div class="index-intro-text">
					<h1>Demographics (2016)</h1><br>
					<script type="text/javascript">
					  google.load("visualization", "1", {packages:["corechart"]});
					  google.setOnLoadCallback(drawChart);
					  function drawChart() {

						var data = google.visualization.arrayToDataTable([
						  ['Branch', 'No. of students'],
						  ['CSE',     55],
						  ['EE',      41],
						  ['ME',  45],
							['CE', 20],
							['CST', 17]
						]);

						var options = {
						  title: 'Btech Final Year Demographics'
						};

						var chart = new google.visualization.PieChart(document.getElementById('piechart'));

						chart.draw(data, options);
					  }
					</script>
					<div id="piechart" style="float: left;width: 50%; height: 300px;"></div>
					<script type="text/javascript">
					  google.load("visualization", "1", {packages:["corechart"]});
					  google.setOnLoadCallback(drawChart);
					  function drawChart() {

						var data = google.visualization.arrayToDataTable([
						  ['Branch', 'No. of students'],
						  ['CSE',    56 ],
						  ['EE',      44],
						  ['ME',  46],
						  ['CE',  16],
						  ['CST',  20]
						]);

						var options = {
						  title: 'Btech Pre-Final Year Demographics'
						};

						var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

						chart.draw(data, options);
					  }
					</script>
					<div id="piechart2" style="float: left;width: 50%; height: 300px;"></div>
					<script type="text/javascript">
					  google.load("visualization", "1", {packages:["corechart"]});
					  google.setOnLoadCallback(drawChart);
					  function drawChart() {

						var data = google.visualization.arrayToDataTable([
						  ['Branch', 'No. of students'],
						  ['CSE',  9],
						  ['CE',  11],
						  ['MC',  9],
						  ['ME',  7],
						  ['MS',  9],
							['MT', 14],
							['NT', 10]
						]);

						var options = {
						  title: 'Mtech Final Year Demographics'
						};

						var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

						chart.draw(data, options);
					  }
					</script>
					<div id="piechart3" style="float: left;width: 50%; height: 300px;"></div>
					<script type="text/javascript">
					  google.load("visualization", "1", {packages:["corechart"]});
					  google.setOnLoadCallback(drawChart);
					  function drawChart() {

						var data = google.visualization.arrayToDataTable([
							['Branch', 'No. of students'],
						  ['CSE',  12],
						  ['CE',  14],
						  ['MC',  16],
						  ['ME',  14],
						  ['MS',  10],
							['MT', 13],
							['NT', 13]
						]);

						var options = {
						  title: 'Mtech Pre-Final Year Demographics'
						};

						var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

						chart.draw(data, options);
					  }
					</script>
					<div id="piechart4" style="float: left;width: 50%; height: 300px;"></div>
				</div>
			</div>
		</div>
		<div class="grid-20">
			<?php include("panel.php"); ?>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
