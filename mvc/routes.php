<?php

require_once('controllers/survey_controller.php');


// controller's controller
switch ($controller){
	
	case 'default':
		require_once('models/default_model.php');
		$controller = new DefaultController();
		break;
	case 'animal':
		require_once('models/animal_model.php');
		$controller = new AnimalController();
		break;
}

$controller->run();

?>