<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://d3js.org/d3.v4.min.js"></script>
	<style>
		svg {
			background-color: lightgray;
		}	
		.bar {
		  fill: blue;
		}
		.bar:hover {
		  fill: yellow;
		}
		.text {
		  fill: white;
		  font-family: sans-serif
		}
		.arc:hover{
			opacity: 0.5;			
		}
		.links line {
		  stroke: #999;
		  stroke-opacity: 0.6;
		}

		.nodes circle {
		  stroke: #fff;
		  stroke-width: 1.5px;
		}

		.nodes text {
		  pointer-events: none;
		  font: 10px sans-serif;
		}
	</style>

<script>

$(document).ready(function(){
// bar chart

	// Data 
	// var dataArray = [];
		
	var svg = d3.select(".bar");

	d3.csv("query.php", function(error, dataArray) {
	  if (error) throw error;
	  	console.log(dataArray);
		  // Creating bars
		svg.selectAll("rect")
			.data(dataArray)
			.enter()
			.append("rect")
			.attr("class", "bar")
			.attr("height", function(d, i) {return (d.num_customers * 10)})
			.attr("width","10")
			.attr("x", function(d, i) {return (i * 10) + 25})
			.attr("y", function(d, i) {return 400 - (d.num_customers * 10)});

		// Creating numbers for each bar
		svg.selectAll("text")
			.data(dataArray)
			.enter()
			.append("text")
			.text(function(d) {return d.country_id})
			.attr("class", "text")
			.attr("x", function(d, i) {return (i * 50) + 30})
			.attr("y", function(d, i) {return 420 - (d.num_customers * 10)});

	  
	});
	
	
	
});

</script>
</head>

<body>

<svg class="bar" width="900" height="900"> </svg>

</body>
</html>