<?php include("header.php"); ?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<div class="wrap">
	<div class="grid-container">
			<div class="grid-block">
				<div class="index-intro-text">
					<h1>Demographics (2018)</h1><br>
					<script type="text/javascript">
					  google.load("visualization", "1", {packages:["corechart"]});
					  google.setOnLoadCallback(drawChart);
					  function drawChart() {

						var data = google.visualization.arrayToDataTable([
						  ['Branch', 'No. of students'],
							['Computer Science and Engineering',     22.19],
							['Electrical Engineering',      22.19],
							['Mechanical Engineering',  20.15],
							['Civil Engineering', 14.29],
							['Chemical and Biochemical Engineering', 13.78],
							['Metallurgical and Materials Engineering', 7.4]
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
						 	['Computer Science and Engineering',     17.98],
						 	['Artificial Intelligence and Data Science',     7.91],
							['Mathematics and Computing', 9.88],
						  	['Electrical Engineering',      17.59],
						  	['Mechanical Engineering',  13.84],
							['Civil Engineering', 10.67],
							['Chemical and Biochemical Engineering', 11.07],
							['Metallurgical and Materials Engineering', 6.32],
							['Engineering Physics', 4.74],
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
						  ['Artificial Intelligence',     16.19],
						  ['Civil & Infrastructure Engineering',  7.82],
						  ['Communication System Engineering',  9.5],
						  ['Computer Science and Engineering',  12.29],
						  ['Materials Science and Engineering', 7.26],
						  ['VLSI & Embedded Systems', 3.9],
						  ['Mathematics & Computing', 10.1],
						  ['Mechanical Engineering', 11.73],
						  ['Mechatronics', 8.38],
						  ['Power and Control', 4.46],
						  ['Structural Engineering', 3.9],
						  ['Geotechnical Engineering', 4.47]
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
						  	['Physics', 33.73],
							['Chemistry', 31.33],
							['Mathematics', 34.94]
						]);

						var options = {
						  title: 'M.Sc Final Year Demographics'
						};

						var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

						chart.draw(data, options);
					  }
					</script>
					<div id="piechart4" style="float: left;width: 50%; height: 300px;"></div>
				</div>
			</div>
		
		<div class="grid-con-2">
			<?php include("panel.php"); ?>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
