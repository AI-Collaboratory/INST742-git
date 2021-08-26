<!DOCTYPE html>
<html>
<head>	
<style>
	div {
		margin-top: 20px;
		margin-bottom: 20px;
	}

	table td{
		border: 1px solid black;
	}
	th {
		background: yellow;
		border: 1px solid black;
	}
</style>

<script>
function validateForm() {
    var x = document.forms["food"]["food"].value;
    if (x == "Select") {
    	alert("nothing is selected");
        return false;
    } 
}
</script>

</head>
<body>

<div>
	<form name="food" action='food.php' onsubmit="return validateForm();" method='POST'>
		<select name="food">
			<option value="Select" selected="selected">-Select-</option>
			<option value="Double Burger">Double Burger</option>
			<option value="Cheese Taco">Cheese Taco</option>
			<option value="French Fries">French Fries</option>
			<option value="Tuna Salad">Tuna Salad</option>
		</select>
		<input type="submit"><br>
	</form>
</div>







</body>
</html>