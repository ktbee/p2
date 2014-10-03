<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="css/custom.css" rel="stylesheet">
	<?php require 'logic.php' ?>
	<title>P2 | Password Generator</title>
</head>
<body>
<div class='container'>	
	<header>
	<div>
		<h1 class="text-center">XKCD Password Generator</h1>
	</div>
	</header>
	<br>
		<a href='http://xkcd.com/936/'>
			<img src='password_strength.png' alt="XKCD comic on password policies" class="center-block">
		</a>
	<br>
	<br>
	<h3 class='text-center'>Thought the comic was a good idea? Generate a password all your own!</h3>
	<br>
	<br>
	<span id='output' class='center-block text-center'>
	<?php 
		for($i = 0, $size = count($newPassword) - 1; $i < $size; $i++){
			echo $newPassword[$i];
		}
		if ($numInclude == 'on'){
			echo '-'.$randNum;
		}

		if ($symInclude == 'on'){
			echo '-'.$randSym;
		}
	?>
	</span>
	<br>
	<br>
	<br>
	<form method='POST' action='index.php' class='center-block'>
		<label for='numWord'>Number of words you want (max 9)</label>
		<input type='number' name='numWord' id='numWord' max='9' min='1'><br>
		
		<label for='numInclude'>Include numbers in the password?</label>
		<input type='checkbox' name='numInclude' id='numInclude'><br>
		
		<label for='symInclude'>Include symbols?</label>
		<input type='checkbox' name='symInclude' id='symInclude'><br>
		<br>
		<button type='submit' class='btn btn-primary center-block'>Get the password of your dreams</button>
	</form>
</div> <!-- end container -->	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>


