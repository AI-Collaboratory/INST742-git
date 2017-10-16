<!DOCTYPE html>
<html>
<head>	
<style>
	div {
		margin-top: 30px;
		margin-bottom: 20px;
		font-size: 30px;
	}

	form, span {
		font-size: 20px;
	}
	.hide {
		visibility: hidden;
	}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
	document.getElementById("q11").setAttribute("class", "hide");
}, false); 


function check_q1(){
	var x = document.forms["q1"]["q1"].value;
	var q11 = document.forms["q1"]["q11"].value;

    if (x == "yes" && q11=="") {
		document.getElementById("q11").removeAttribute('class');
		return false;
    } else {    	    	
		return true;
    }    
}
</script>
</head>
<body>

<div>
<div><strong>Question 1. Is your age equal to or more than 21? </strong></div>
<div>
	<form name="q1" action='save_answers.php' onsubmit="return check_q1();" method='POST'>
		<input type="radio" name="q1" value="yes"> Yes. Equal or More than 21. <br>
		<input type="radio" name="q1" value="no"> No. Under age.<br>
		<br>
		<input type="submit"><br>

		<div id="q11">
			<strong>Question 1-1. How frequently do you drink alcohol?</strong><br>
			<span>
				<input type='radio' name='q11' value='1'> Once a week <br>
				<input type='radio' name='q11' value='2'> Twice to Three times a week<br>
				<input type='radio' name='q11' value='4'> Four times or more a week<br>
				<br>
				<input type='submit'><br>
			</span>
			
		</div>
	</form>
</div>
</div>








</body>
</html>