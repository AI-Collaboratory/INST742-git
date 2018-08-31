<?php

class DefaultModel
{

	public $survey;

	public static function fetch(){
		// this could be DB operations, rather than static data
		$survey = "<div><strong>Is your age equal to or more than 21? </strong></div>
				<div>
					<form action='question1-1.php' method='POST'>
						<input type='radio' name='q1' value='yes'> Yes. Equal or More than 21. <br>
						<input type='radio' name='q1' value='no'> No. Under age.<br>
						<br>
						<input type='submit'><br>
					</form>
				</div>";
		return $survey;
	}

}

?>