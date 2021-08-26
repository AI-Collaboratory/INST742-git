<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
	#square {
		margin-top: 20px;
		margin-left: 100px;
		height: 200px;
		width: 200px;
		background: orange;
	}

	div {
		margin-bottom: 20px;
	}

	.round {
		border-radius: 20px;
	}

	#square:hover{
		cursor: pointer;
	}
	
</style>
<script>

// JavaScript Solution
function showSentence(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("square").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "ajax_test.txt", true);
	xhttp.send();
}


$(document).ready(function(){

	
	$("#square").click(function(){
		// Using "GET" method (1)
		// $.get("ajax_test.txt",function(response, status){
		// 	$("#square").text(status + ": " + response);
		// });

		// Using "GET" method (2)
		// $.get("ajax_test.php",
		// 	{
		//   		name: "John Smith"
		// 	}, 
		// 	function(response, status){
		// 		$("#square").text(status + ": " + response);
		// 	}
		// );

		// // Using "POST" method
		// $.post("ajax_test.php",
		// 	{
		//   		name: "John Smith"
		// 	}, 
		// 	function(response, status){
		// 		$("#square").text(status + ": " + response);
		// 	}
		// );

		// // Primitive function 
		// $.ajax({
		// 	url: "ajax_test.php",
		// 	data: {name: "John Smith"},
		// 	type: "GET",
		// 	success: function(response, status){
		// 		$("#square").text(status + ": " + response);
		// 	}
		// });


		// // The simplest form of jQuery AJAX
		// $(this).load("ajax_test.php");

		// // A bit advanced form of "load"
		// $(this).load("ajax_test.php", 
		// 	{
		// 		name: "John Smith"
		// 	},
		// 	function (response, status, xhr){}
		// );


		// 1. It is possible to save an AJAX object in a variable.
		// 2. How do you make sure the order between request1 and request2?
		var request1 = $.ajax({
			url: "ajax_test.php",
			data: {name: "John Smith"},
			type: "POST"			
		});

		var request2 = $.ajax({
			url: "ajax_test.txt",
			data: {name: "John Smith"},
			type: "POST"			
		});
		
		request1.done(function(response, status){
			$("#square").text(status + ": " + response);
			$("#square").css("color", "red");
		});

		request1.fail(function(xhr, status){
			alert ("Failed: " + status);
		});

		

		$.when(request1.then(function(){
			$("#square").css("color", "blue");
		})).done(function(){
			request2.then(function(response, status){
				$("#square").text(status + ": " + response);
				$("#square").css("color", "green");
			});
		});

		

		

	});


});



</script>
</head>

<body>
	
	<!-- <div id="square" onclick="showSentence()"></div>	 -->
	<div id="square"></div>
	


</body>
</html>