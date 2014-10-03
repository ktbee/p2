<?php
	
	require 'wordList.php';
		 
	$numWords = $_POST['numWord'] - 1;
	$newPassword = Array();
	$numInclude = $_POST['numInclude'];
	$symInclude = $_POST['symInclude'];

	for($i=0; $i<=$numWords; $i++){
		$wordPosition = array_rand($wordList);
		$newWord = $wordList[$wordPosition];
		array_push($newPassword, $newWord);
		array_push($newPassword, "-");
	}


	$symPosition = array_rand($symList);
	$randSym = $symList[$symPosition];

	$randNum = rand(0,9);

	





