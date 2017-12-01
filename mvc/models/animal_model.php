<?php

class AnimalModel
{

	public $survey;

	public static function fetch(){
		// this could be DB operations, rather than static data
		$survey = "<strong>What's your favorite animal?</strong> <br>
					<div>
						<form action='animal.php' method='POST'>
							<select name='animal'>
								<option value='lion'>Lion</option>
								<option value='cat'>Cat</option>
								<option value='dog'>Dog</option>
								<option value='elephant'>Elephant</option>
							</select>
							<input type='submit'><br>
						</form>
					</div>
					";
		return $survey;
	}

}

?>