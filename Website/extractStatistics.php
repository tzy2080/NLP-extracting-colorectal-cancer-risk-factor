<?php
	// extract the json file with statistic data
    $bucket = "websitefyp";
    $jsonName = "topic_statistic.json";
    $jData = new Database();
    $jsonData = $jData->extractJsonData($bucket, $jsonName);
    $jResult = $jData->getJsonData();	
?>
<?php	
	else{
		$jResult = json_encode($jResult);
?>
		<!-- Start graph canvas section -->
		<div class="container">
			<canvas id="graph" height="500" width="800"/>
		</div>
		<!-- End graph canvas section -->
		
		<!-- Script section that draws the graph -->
		<script>
			chartIt();

			// Function that draws the graph
			function chartIt(){
				var canvas = document.getElementById("graph").getContext('2d');
				const data = getData();
				var graphParams = {
					type:"bar",
					label: "Risk factors",
					data:{
						datasets: data,
					},
					// Configuration options go here
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: true
								},
								scaleLabel: {
									display: true,
									labelString: 'Number of topics',
									fontSize: 20
								}
							}],
							xAxes: [{
								scaleLabel: {
									display: true,
									labelString: 'Colorectal cancer risk factors',
									fontSize: 20
								}
							}]
						},
						title: {
							display: true,
							text: 'Trending colorectal risk factors',
							fontSize: 30
						},
						tooltips: {
							titleFontSize: 0
						},
						legend: {
							display: true,
							labels:{
								fontSize: 18
							}
						}
					}
				}
				ctx = new Chart(canvas, graphParams);
			}

			// Function that reads the data from the retrieved json file and converts it to a suitable format for the graph
			function getData(){
				// Function that generates a random rgb colour
				var dynamicColors = function() {
					var r = Math.floor(Math.random() * 255);
					var g = Math.floor(Math.random() * 255);
					var b = Math.floor(Math.random() * 255);
					return "rgb(" + r + "," + g + "," + b + "0.8" + ")";
				};

				// Data formating section
				const datasets = [];
				<?php echo "const data = " . $jResult . ";"; ?>
				for (var key in data) {
					if (data.hasOwnProperty(key)) {
						var color = dynamicColors()
						var json_data = {}
						json_data['label'] = key
						json_data['backgroundColor'] = color
						json_data['hoverBackgroundColor'] = color
						json_data['data'] = [data[key]]
						datasets.push(json_data)
					}
				}
				return datasets
			}

		</script>
	<?php
	}
	?>
