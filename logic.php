<?php
	
	//require 'wordList.php';
	$wordList = Array(
			'duplicity',
			'durability',
			'durable',
			'duration',
			'duress',
			'during',
			'dusk',
			'dust',
			'jacket',
			'dustpan',
			'dusty',
			'Dutch'
		);

	 
	$numWords = $_POST['numWord'] - 1;
	$newPassword = Array();

	for($i=0; $i<=$numWords; $i++){
		$wordPosition = array_rand($wordList);
		$newWord = $wordList[$wordPosition];
		array_push($newPassword, $newWord);
	}


	for($i = 0, $size = count($newPassword); $i < $size; $i++){
			echo $newPassword[$i].'-';
	}




