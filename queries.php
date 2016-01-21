<?php
require 'dbConnection/connect.php';
session_start();
$choicesID   = array();
$choicesText = array();

$promptID    = $_SESSION['promptID'];
$pageType    = $_SESSION['pageType'];
$promptText  = $_SESSION['promptText'];
$choicesID   = $_SESSION['choicesID'];
$choicesText = $_SESSION['choicesText'];
$url         = $_SESSION['url'];
$condition   = $_SESSION['condition'];
$to_question = $_SESSION['to_question'];

$randID = array();
$randChoice = array(); 


function getBaseQuestion(){
	global $db;
	$baseVector;
	$baseQuestion;
	if($result = $db -> query ("SELECT id FROM sequential_questions WHERE type = '8'")){
		while($row = $result -> fetch_object()){
			$baseVector = $row -> id;
		}
	}	
	if($result = $db -> query ("SELECT * FROM `question_vectors` WHERE vector_id = '" . $baseVector . "'")){
		while($row = $result -> fetch_object()){
			$baseQuestion = $row -> question_id;
		}
	}
	return $baseQuestion;
}


function getInfo($to_question){
	global $url;
	getVector($to_question);
	getPageType();
	getChoicesID();
	getChoicesText();
	updateSessionVariables();
	if($url == 'agreedisagree'){
		getRandomChoice();
	}

}

function getVector($to_question){
	global $db;
	global $promptID;
	global $pageType;
	global $promptText;

	if($result = $db -> query ("SELECT * FROM sequential_questions WHERE id = '" . $to_question . "'")){
		while($row = $result -> fetch_object()){
			$promptID = $row -> id;
			$pageType = $row -> type;
			$promptText = $row -> text;
		}
	}
}


function getPageType(){
	global $db;
	global $url; 
	global $pageType;

	if($result = $db -> query ("SELECT name FROM question_types WHERE id = '" . $pageType . "'")){
		while($row = $result -> fetch_object()){
			$url = $row -> name;
		}
	}
}


function getChoicesID(){
	global $db;
	global $promptID;
	global $choicesID;

	if($result = $db -> query ("SELECT question_id FROM question_vectors WHERE vector_id = '" . $promptID . "'")){
		for($set = array(); $row = $result -> fetch_assoc(); $set[] = $row['question_id']);
			$choicesID = $set;
	}
}

function getChoicesText(){
	global $db;
	global $choicesID;
	global $choicesText;
	foreach ($choicesID as $key => $value) {
		if($result = $db -> query ("SELECT text FROM sequential_questions WHERE id = '" . $value . "'")){
			while($row = $result -> fetch_object()){
				$choicesText[$key] = $row -> text;
			}
		}
	}
}

function getRandomChoice(){
	global $choicesID;
	global $choicesText;
	global $randID;
	global $randChoice;


	$min = 0; 
	$max = sizeof($choicesText) - 1;

	$randNum = rand($min, $max);
	$randID[0] = $choicesID[$randNum];
	$randChoice[0] = $choicesText[$randNum];
	
}


function nextQuestion(){
	global $db;
	global $promptID;
	global $condition;
	global $to_question;
	//var_dump($promptID);
	//var_dump($condition);
	//var_dump($to_question);
	$query = "SELECT to_question FROM question_links WHERE `condition` = '" . $condition . "' AND `from_question` = '" . $promptID . "'";
	//echo $query;

	if($result = $db -> query ($query)) { 
		while($row = $result -> fetch_object()){
			$to_question = $row -> to_question;
		}
		//var_dump($to_question);
	}
}

function nextQuestionArray(){
	global $db;
	global $promptID;
	global $condition;
	global $to_question;
	//var_dump($promptID);
	//var_dump($condition);
	//var_dump($to_question);
	$sum = 0;
	foreach ($condition as $key => $value) {
		$sum = $value + $sum;
	}
	$query = "SELECT to_question FROM question_links WHERE `condition` = '" . $sum . "' AND `from_question` = '" . $promptID . "'";
	//echo $query;

	if($result = $db -> query ($query)) { 
		while($row = $result -> fetch_object()){
			$to_question = $row -> to_question;
		}
		//var_dump($to_question);
	}
}

function logResponseArray($promptID, $condition){
	global $db;
	$userID = $_SESSION['userID'];
	$time = time();
/*
	echo $userID		. "-----------------";
	echo $promptID		. "-----------------";
	echo $condition		. "-----------------";
	echo $time			. "-----------------";

	$query = "INSERT INTO `pwm_data` . `user_responses` (`participant`, `question`, `response`, `last_modified`) VALUES ('" . $userID . "', '" . $promptID . "', '" . $condition . "', '" . $time . "')";
	echo $query;
*/

	foreach ($condition as $key => $value) {

		if($result = $db -> query ("INSERT INTO `pwm_data` . `user_responses` (`participant`, `question`, `response`, `last_modified`) VALUES ('" . $userID . "', '" . $promptID . "', '" . $value . "', '" . $time . "')")){
		//echo "insert worked";
		}
	}

}
function logResponse($promptID, $condition){
	global $db;
	$userID = $_SESSION['userID'];
	$time = time();
/*
	echo $userID		. "-----------------";
	echo $promptID		. "-----------------";
	echo $condition		. "-----------------";
	echo $time			. "-----------------";

	$query = "INSERT INTO `pwm_data` . `user_responses` (`participant`, `question`, `response`, `last_modified`) VALUES ('" . $userID . "', '" . $promptID . "', '" . $condition . "', '" . $time . "')";
	echo $query;
*/


	if($result = $db -> query ("INSERT INTO `pwm_data` . `user_responses` (`participant`, `question`, `response`, `last_modified`) VALUES ('" . $userID . "', '" . $promptID . "', '" . $condition . "', '" . $time . "')")){
		//echo "insert worked";
	}

}

function updateSessionVariables(){
	global $promptID;
	global $pageType;
	global $promptText;
	global $choicesID;
	global $choicesText;
	global $url;
	global $condition;
	global $to_question;

	$_SESSION['promptID']	 = $promptID;
	$_SESSION['pageType']	 = $pageType;
	$_SESSION['promptText']	 = $promptText;
	$_SESSION['choicesID']	 = $choicesID;
	$_SESSION['choicesText'] = $choicesText;
	$_SESSION['url']		 = $url;
	$_SESSION['condition'] 	 = $condition;
	$_SESSION['to_question'] = $to_question;
	
}