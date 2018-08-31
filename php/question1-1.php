<html>
<head>	
<style>
	div {
		margin-top: 30px;
		margin-bottom: 20px;
		margin-left: 30px;
		font-size: 30px;
	}

	form {
		font-size: 20px;
	}
</style>
<body>

<?php

$answer = $_POST["q1"];


if ($answer == "yes"){
	# show another question
	echo "
	<div><strong>Question 1-1. How frequently do you drink alcohol?</strong></div>
	<div>
	<form action='save_answers.php' method='POST'>
		<input type='radio' name='q11' value='1'> Once a week <br>
		<input type='radio' name='q11' value='2'> Twice to Three times a week<br>
		<input type='radio' name='q11' value='4'> Four times or more a week<br>

		<input type='text' name='q1' value='$answer' hidden> <br>

		<br>
		<input type='submit'><br>
	</form>
	</div>
	";
} 
# if the answer is no (under age), just pass the answer to the next file
else {
	echo "
	<div><strong>You don't have further questions. Click \"Submit\".</strong></div>
	<div>
	<form action='save_answers.php' method='POST'>	
		<input type='text' name='q1' value='$answer' hidden> <br>

		<br>
		<input type='submit'><br>
	</form>
	</div>
	";
}

?>
</body>
</html>