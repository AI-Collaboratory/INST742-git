<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Example Page</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
	<link href="jquery-ui-1.12.1.custom/jquery-ui.theme.css" rel="stylesheet">
	<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>	

<style type="text/css">

	div{
		margin: 0px 0px 0px 40px;	
		font-size: 20px;	
	}

	table td, th {
		border: 1px solid black;
		
		padding: 5px 5px 5px 5px;
	}
	table {
		width: 305px;

	}

	th {
		background: gray;
	}

	th:hover{
		cursor: pointer;
	}

	#details {
		background: yellow;
		display: none;
		width: 300px;
		border: 2px dashed red;
	}

	p {
		margin: 0;
		padding: 20px 0 20px 0;
	}

	#sortable { 
		list-style-type: none; 
		margin: 0; 
		padding: 0; 
		width: 60%; 
	}
	#sortable li { 
		margin: 0 3px 3px 3px; 
		padding: 0.4em; 
		padding-left: 1.5em; 
		font-size: 1.4em; 
		height: 18px; 
	}
	#sortable li span { 
		position: absolute; 
		margin-left: -1.3em; 
	}
	#sortable li:hover {
		background-color: lightblue;
	}
	
</style>

<script>
$(document).ready(function(){
	$( "#accordion" ).accordion();

	$( "#button" ).button();
	$( "#button-icon" ).button({
		icon: "ui-icon-gear",
		showLabel: false
	});


	$( "#radioset" ).buttonset();

	// Animation, Traditional way.
	$("#title").click(function(){				
		$(".row").animate({
				height: '100px',
				fontSize: '30px',
				color: 'blue',
				backgroundColor: 'red'
			}, 2000, function() {
				/* stuff to do after animation is complete */
				$("#details").slideDown("slow");
			});;
	});

	// Sortable
	$( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();

});

</script>
</head>



<body>

<!-- Accordion -->
<h2 class="demoHeaders">Accordion</h2>
<div id="accordion">
	<h3>First</h3>
	<div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
	<h3>Second</h3>
	<div>Phasellus mattis tincidunt nibh.</div>
	<h3>Third</h3>
	<div>Nam dui erat, auctor a, dignissim quis.</div>
</div>

<!-- Button -->
<h2 class="demoHeaders">Button</h2>
<button id="button">A button element</button>
<button id="button-icon">An icon-only button</button>


<!-- Checkboxradio -->
<h2 class="demoHeaders">Checkboxradio</h2>
<form style="margin-top: 1em;">
	<div id="radioset">
		<input type="radio" id="radio1" name="radio"><label for="radio1">Choice 1</label>
		<input type="radio" id="radio2" name="radio" checked="checked"><label for="radio2">Choice 2</label>
		<input type="radio" id="radio3" name="radio"><label for="radio3">Choice 3</label>
	</div>
</form>
<br><br>


<!-- Sortable -->
<h2 class="demoHeaders">Interactive Sortable</h2>
<ul id="sortable">
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
</ul>
 
<br><br>

<!-- Table Example -->

<h2 class="demoHeaders">Table Example</h2>
<div id="table">
	<table>
		<tr id="title">
			<th> ID </th><th>Name</th><th>Age</th>
		</tr>			
		<tr class="row">
			<td> 1 </td><td>John Smith</td><td>20</td>
		</tr>
		<tr class="row">
			<td> 2 </td><td>Amy Johnson</td><td>20</td>
		</tr>
		<tr class="row">
			<td> 3 </td><td>Kevin Williams</td><td>20</td>
		</tr>		
	</table>
</div>

<div id = "details">
	<p> This is a detail about these people...</p>
</div>



</body>