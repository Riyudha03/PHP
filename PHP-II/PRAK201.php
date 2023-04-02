<!DOCTYPE html>
<html>
<head>
	<title>Sorting Names Alphabetically</title>
</head>
<body>
	<form method="POST">
		<label>Enter name 1:</label>
		<input type="text" name="name1" required>
		<br><br>
		<label>Enter name 2:</label>
		<input type="text" name="name2" required>
		<br><br>
		<label>Enter name 3:</label>
		<input type="text" name="name3" required>
		<br><br>
		<button type="submit" name="submit">Sort</button>
	</form>
	<br>

	<?php
	if(isset($_POST['submit'])){
		$names_array = array($_POST['name1'], $_POST['name2'], $_POST['name3']);
		sort($names_array);

		echo "<h3>Sorted names:</h3>";
		foreach($names_array as $name){
			echo $name . "<br>";
		}
	}
	?>
</body>
</html>