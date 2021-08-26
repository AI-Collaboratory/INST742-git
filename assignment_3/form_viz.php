<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://d3js.org/d3.v4.min.js"></script>
	<style>
		svg {
			background-color: lightgray;
			float: left;
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
		#message {
			background: yellow;
			max-width: 500px;
			margin: 10px;
		}		
		#submit {
			width: 300px;
			height: 50px;
			font-size: 20px;
			margin: 10px;
		}
		#city_form div {
			border: 1px solid gray;
			max-width: 900px;
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
			.attr("height", function(d, i) {return (d.num_customers * 5)})
			.attr("width","10")
			.attr("x", function(d, i) {return (i * 10) + 25})
			.attr("y", function(d, i) {return 500 - (d.num_customers * 5)});

		// Creating numbers for each bar
		svg.selectAll("text")
			.data(dataArray)
			.enter()
			.append("text")
			.text(function(d) {return d.num_customers})
			.attr("class", "text")
			.attr("x", function(d, i) {return (i * 10) + 25})
			.attr("y", function(d, i) {return 500 - (d.num_customers * 5)});

	  
	});


	$("#submit").click(function(){				
		// for now, these variables are fake. You need to get these data from the form.
		city_name = "test";
		country_id = 0;

		$.post("insert.php", 
          {
            city_name: city_name,
            country_id: country_id
          }, function(data, status){
          	$("#city_form").trigger('reset');
            $("#message").html(data).fadeIn(2000).delay(3000).fadeOut(2000);
          }
        );
	});
	
	
});

</script>
</head>

<body>

<!-- Assignment 3: add a form so you can add a city entry to the "city" table. -->
<form id="city_form">
	<!-- inputs needed here -->
	<div> Put a form here </div>
</form>

<button id="submit"> Submit </button>
<div id="message"></div>

<!-- The graph area. -->
<svg class="bar" width="1000" height="600"> </svg>

</body>
</html>