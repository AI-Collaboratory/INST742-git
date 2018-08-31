<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
<div id="test" class="dd">	
	<p class="abc"></p>	
	<p class="ppp">This is the second P tag.</p>	
	<span class="dd">This is a span tag.</span></div>

<script>
	// document.getElementsByClassName("p")[0].innerHTML = "hi";
	$("#test .abc").html("<strong>hi</strong>");
</script>
</body>
</html>
