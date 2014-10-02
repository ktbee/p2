<?php
	
	// require 'wordList.php';
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

	$numWords = 4;
	$newPassword = Array();

	for($i=0; $i<=$numWords; $i++){
		$newWord = array_rand($wordList);
		array_push($newPassword, $newWord);
	}

	