<?php


class DefaultController
{
	public $survey;

	public function run(){		
		$survey = DefaultModel::fetch();		
    	require_once('views/survey_view.php');  
	}
    
}

class AnimalController
{
    public $survey;

	public function run(){
		$survey = AnimalModel::fetch();		
    	require_once('views/survey_view.php');  
	}
}