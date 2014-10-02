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
	<header>
	<div>
		<h1 class="text-center">XKCD Password Generator</h1>
	</div>
	</header>

	<form method='POST' action='index.php'>
		<label for='numWord'>Number of words you want</label>
		<input type='number' name='numWord' id='numWord'><br>
		
		<label for='numInclude'>Include numbers in the password?</label>
		<input type='checkbox' name='numInclude' id='numInclude'><br>
		
		<label for='symInclude'>Include symbols?</label>
		<input type='checkbox' name='symInclude' id='symInclude'><br>
	</form>
	<br>
	<br>
	<?php 
		print_r($newPassword); 
	?>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>


