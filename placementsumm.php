<?php include("header.php"); ?>

<div class="wrap">
	<!-- Chart 1: Average Data -->
	<div class="chart-container">
        <div style="margin: 20px;">
            <h2>Average Packages</h2>
            <canvas id="chart1" width="680" height="340"></canvas>
        </div>
    <!-- </div> -->

    <!-- Chart 2: Internships Data -->
    <!-- <div class="chart-container"> -->
        <div style="margin: 20px;">
            <h2>Internships</h2>
            <canvas id="chart2" width="680" height="340"></canvas>
        </div>
    <!-- </div> -->

    <!-- Chart 3: Additional Chart -->
    <!-- <div class="chart-container"> -->
        <div style="margin: 20px;">
            <h2>Companies and Offers</h2>
            <canvas id="chart3" width="680" height="340"></canvas>
        </div>
    <!-- </div> -->

    <!-- Chart 4: AVG STIPEND Data -->
    <!-- <div class="chart-container"> -->
        <div style="margin: 20px;">
            <h2>AVG STIPEND</h2>
            <canvas id="chart4" width="680" height="340"></canvas>
        </div>
    <!-- </div> -->

    <!-- Chart 5: Pie Chart -->
    <!-- <div class="chart-container"> -->
        <div style="margin: 20px;">
            <h2>Recruitment Sectors</h2>
            <div id="pieChartContainer" style="width: 1200px; height: 1200px;"></div>
        </div>
    </div>
</div>
<!-- <script type="text/javascript" src="https://www.google.com/jsapi"></script>-->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Include AnyChart library -->
<script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-bundle.min.js"></script>
<style>
	/* Apply basic CSS styles */
	.chart-container {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		margin: 20px;
	}
	.chart {
		width: 48%; /* Set the width of each chart */
		margin-bottom: 20px;
	}

</style>

<script>
        // Data for Chart 1 (Average Data)
        var data1 = {
            labels: ['2019-20', '2020-21', '2021-22', '2022-23'],
            datasets: [
                {
                    label: 'MSC',
                    data: [6.13, 6.97, 6.86, 9.225],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Blue color
                    borderRadius: 5, // Set border radius for rounded top corners
                    borderWidth: 0, // Remove border for the bars
                },
                {
                    label: 'MTECH',
                    data: [12.71, 12.22, 14.99, 15.77],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)', // Pink color
                    borderRadius: 5, // Set border radius for rounded top corners
                },
                {
                    label: 'BTECH',
                    data: [14.76, 17.13, 28.86, 24.56],
                    backgroundColor: 'rgba(75, 192, 192, 0.5)', // Teal color
                    borderRadius: 5, // Set border radius for rounded top corners
                },
            ],
        };


        // Configuration for Chart 1
        var config1 = {
            type: 'bar',
            data: data1,
            options: {
                plugins: {
                    legend: {
                        display: true,
                    },
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        grid: {
                            display: false, // Remove x-axis grid lines
                        },
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true, // Display y-axis grid lines
                        },
                        ticks: {
                            stepSize: 7.5, // Change the step size for y-axis
                        },
                    },
                },
            },
        };

        // Data for Chart 2 (Internships Data)
        var data2 = {
            labels: ['2019-20', '2020-21', '2021-22', '2022-23'],
            datasets: [
                {
                    label: 'Total companies visited',
                    data: [23, 27, 38, 53],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Blue color
                    borderRadius: 5, // Set border radius for rounded top corners
                    borderWidth: 0, // Remove border for the bars
                },
                {
                    label: 'Total offers',
                    data: [124, 127, 154, 118],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)', // Pink color
                    borderRadius: 5, // Set border radius for rounded top corners
                },
            ],
        };

        // Configuration for Chart 2
        var config2 = {
            type: 'bar',
            data: data2,
            options: {
                plugins: {
                    legend: {
                        display: true,
                    },
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        grid: {
                            display: false, // Remove x-axis grid lines
                        },
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true, // Display y-axis grid lines
                        },
                        ticks: {
                            stepSize: 40, // Change the step size for y-axis
                        },
                    },
                },
            },
        };

        // Data for Chart 3 (Additional Chart)
        var data3 = {
            labels: ['2019-20', '2020-21', '2021-22', '2022-23'],
            datasets: [
                {
                    label: 'Total companies visited',
                    data: [106, 125, 154, 162],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Blue color
                    borderRadius: 5, // Set border radius for rounded top corners
                    borderWidth: 0, // Remove border for the bars
                },
                {
                    label: 'Total offers',
                    data: [202, 239, 412, 413],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)', // Pink color
                    borderRadius: 5, // Set border radius for rounded top corners
                },
            ],
        };

        // Configuration for Chart 3
        var config3 = {
            type: 'bar',
            data: data3,
            options: {
                plugins: {
                    legend: {
                        display: true,
                    },
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        grid: {
                            display: false, // Remove x-axis grid lines
                        },
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true, // Display y-axis grid lines
                        },
                        ticks: {
                            stepSize: 150, // Change the step size for y-axis
                        },
                    },
                },
            },
        };

        // Data for Chart 4 (AVG STIPEND Data)
    var data4 = {
        labels: ['2020-21', '2021-22', '2022-23'],
        datasets: [
            {
                label: 'MTECH',
                data: [26.2, 27.8, 41.839],
                backgroundColor: 'rgba(54, 162, 235, 0.5)', // Blue color
                borderRadius: 5, // Set border radius for rounded top corners
                borderWidth: 0, // Remove border for the bars
            },
            {
                label: 'BTECH',
                data: [55.2, 68.6, 47.156],
                backgroundColor: 'rgba(255, 99, 132, 0.5)', // Pink color
                borderRadius: 5, // Set border radius for rounded top corners
            },
        ],
    };

    // Configuration for Chart 4
    var config4 = {
        type: 'bar',
        data: data4,
        options: {
            plugins: {
                legend: {
                    display: true,
                },
            },
            scales: {
                x: {
                    beginAtZero: true,
                    grid: {
                        display: false, // Remove x-axis grid lines
                    },
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        display: true, // Display y-axis grid lines
                    },
                    ticks: {
                        stepSize: 10, // Change the step size for y-axis
                    },
                },
            },
        },
    };




        // Create Chart 4
        var ctx4 = document.getElementById('chart4').getContext('2d');
        var myChart4 = new Chart(ctx4, config4);

        // Create Chart 1
        var ctx1 = document.getElementById('chart1').getContext('2d');
        var myChart1 = new Chart(ctx1, config1);

        // Create Chart 2
        var ctx2 = document.getElementById('chart2').getContext('2d');
        var myChart2 = new Chart(ctx2, config2);

        // Create Chart 3
        var ctx3 = document.getElementById('chart3').getContext('2d');
        var myChart3 = new Chart(ctx3, config3);

        // Data for Pie Chart
        var pieData = [
            { x: "IT", value: 35.90 },
            { x: "Finance", value: 4.62 },
            { x: "Fintech", value: 2.56 },
            { x: "Analytics/Consulting", value: 13.33 },
            { x: "Core", value: 7.18 },
            { x: "E-commerce", value: 4.62 },
            { x: "Edtech", value: 6.15 },
            { x: "Manufacturing", value: 8.21 },
            { x: "Teaching & Research", value: 4.62 },
            { x: "Research & Development", value: 1.03 },
            { x: "Others", value: 12.82 },
        ];

        // Create Pie Chart
        anychart.onDocumentReady(function () {
            var pieChart = anychart.pie(pieData);

            // Set the position of labels outside the pie chart
            pieChart.labels().position("outside");

            // Configure connectors
            pieChart.connectorStroke({ color: "black", thickness: 1, dash: "2 2" });
            // chart.connectorLength(1); 
            // Disable the legend
            pieChart.legend(false);

            // Set the chart title
            pieChart.title("Recruitment Sectors");

            // Customize label color and font
            pieChart.labels().fontColor("black"); // Change label color to black
            pieChart.labels().fontSize(12); // Change label font size to 10 pixels

            // Enable percentage display with custom formatting
            pieChart.labels().format("{%x} ({%value}%)");
    // Adjust the margin between the chart and its title
    //         var marsize = 0;
    // pieChart.margin(marsize, marsize, marsize, marsize); // Use appropriate margin values (top, right, bottom, left)
    //     // Adjust the margin of the chart title
    //     pieChart.title().margin(0, 0, 0, 0); // Use appropriate margin values (top, right, bottom, left)


            // Set container id for the pie chart and initiate chart drawing
            pieChart.container("pieChartContainer").draw();
        });
    </script>

<?php include("footer.php"); ?>
