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
    var x = document.forms["animalForm"]["animal"].value;
    if (x == "") {
        alert("Animal field must be filled out");
        return false;
    } else if (x=="Lion"){
    	alert("Lion is not acceptable...");
    	return false;
    }
}
</script>

</head>
<body>

<?php 
// Generating a form by making use of a loop
echo "<strong>DYNAMIC FORMS</strong> <br>";
$arr = ["Lion", "Cat", "Dog", "Pig", "Elephant", "Tiger"];
echo "<form action='animal.php' method='POST'>";

foreach ($arr as $value) {
	echo "<input type='radio' name='animal' value=" . $value . ">" . $value . "<br>";
}
echo "<input type='submit' value='submit'>";
echo "</form>";

?>


<!-- Form Validation Example. Just a simple text form. -->
<div>
	<strong>SOLUTION 1: Validations using PHP</strong> <br>
	<form action='animal.php' method='POST'>
		Don't put back slashes in the text box: <input type="text" name="animal"> <br>
		<input type="submit"><br>
	</form>
</div>

<div>
	<form action='animal.php' method='POST'>
		Don't put spaces between words: <input type="text" name="animal"> <br>
		<input type="submit"><br>
	</form>
</div>


<strong>SOLUTION 2: Validations using JavaScript</strong> <br>
<div>
	<form name="animalForm" action='animal.php' method='POST' onsubmit="return validateForm()">
		Type in an Animal Name: <input type="text" name="animal"> <br>
		<input type="submit"><br>
	</form>
</div>


<strong>SOLUTION 3: Provide data inputs that do not allow free forms of text.</strong> <br>
<div>
	<form action='animal.php' method='POST'>
		<select name="animal">
			<option value="lion">Lion</option>
			<option value="cat">Cat</option>
			<option value="dog">Dog</option>
			<option value="elephant">Elephant</option>
		</select>
		<input type="submit"><br>
	</form>
</div>







</body>
</html>