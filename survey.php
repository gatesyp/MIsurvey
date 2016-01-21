<?php
session_start();
error_reporting(0);
require 'dbConnection/connect.php';
require 'queries.php';


if(isset($_POST['submit'])){
	$_SESSION['userID'] = $_POST['userID'];
	// get the base question to begin survey

	$baseQuestion = getBaseQuestion();
	// $currentID = 0;
	getInfo($baseQuestion);
	$num = sizeof($choicesID);
	require $url . '/' . $url . $num . '.php';

} else{
	//if(isset($_POST['response'])){
	global $condition;
	global $promptID;
	global $randID;
	global $url;
	$condition = $_POST['response'];
	//var_dump($condition);

	switch ($url) {
		case 'bigq':
		if($condition == 'Yes'){
			$condition = 1;
			logResponse($promptID, $condition);
			nextQuestion();
			getInfo($to_question);
			$num = sizeof($choicesID);
			require $url . '/' . $url . $num . '.php';
		}else{
			$condition = 0;
			logResponse($promptID, $condition);
			nextQuestion();
			getInfo($to_question);
			$num = sizeof($choicesID);
			require $url . '/' . $url . $num . '.php';
		}
		break;

		case 'agreedisagree':
		logResponse($promptID, $condition);
		nextQuestion();
		getInfo($to_question);
		$num = sizeof($choicesID);
		require $url . '/' . $url . $num . '.php';
		break;

		case 'checkbox':
		global $choicesID;
		logResponseArray($promptID, $condition);
		nextQuestionArray();
		getInfo($to_question);
		$num = sizeof($choicesID);
		require $url . '/' . $url . $num . '.php';
		break;

		case 'mc':
		global $choicesID;
		logResponse($promptID, $condition);
		nextQuestion();
		getInfo($to_question);
		$num = sizeof($choicesID);
		require $url . '/' . $url . $num . '.php';

		break;

		//}

		//getInfo($currentID);
		//require $url . '.php';
	}
}
//$id = 13;
//getInfo($id);
//var_dump($promptID);
//var_dump($pageType);
//var_dump($promptText);
//var_dump($choicesID);
//var_dump($choicesText);
//var_dump($url);

