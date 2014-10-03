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

	$symList = Array(
			'!',
			'@',
			'#',
			'$',
			'%',
			'^',
			'&',
			'*',
			'~'
		);


	 
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

	//foreach( $newPassword as $word){
	//	echo $word;
	//}

	$symPosition = array_rand($symList);
	$randSym = $symList[$symPosition];

	for($i = 0, $size = count($newPassword) - 1; $i < $size; $i++){
			echo $newPassword[$i];
	}

	if ($numInclude == 'on'){
		$randNum = rand(0,9);
		echo '-'.$randNum;
	}

	if ($symInclude == 'on'){
		echo '-'.$randSym;
	}





