<?php
	
	require 'wordList.php'; // Separation of concerns for the word and symbol lists
		 
	$numWords = $_POST['numWord'] - 1;  // Getting the form's information
	$numInclude = $_POST['numInclude'];
	$symInclude = $_POST['symInclude'];
	$newPassword = Array();             // Creating an array for the generated password

	for($i=0; $i<=$numWords; $i++){
		$wordPosition = array_rand($wordList);   // Randomly picking an index from the word list
		$newWord = $wordList[$wordPosition];     // Grabbing the value of the key at the random index's position in the array
		array_push($newPassword, $newWord);      // Adding the word and dashes to the array    
		array_push($newPassword, "-");
	}


	$symPosition = array_rand($symList);  // Pulling a random symbol from the list
	$randSym = $symList[$symPosition];

	$randNum = rand(0,9);                 // Generating a random number

	





