<!DOCTYPE html>
<html>
<head>
	<title>Number Display Program</title>
</head>
<body>
	<form method="post">
		<label for="lowerLimit">Lower Limit:</label>
		<input type="number" id="lowerLimit" name="lowerLimit" required><br><br>
		
		<label for="upperLimit">Upper Limit:</label>
		<input type="number" id="upperLimit" name="upperLimit" required><br><br>
		
		<input type="submit" name="submit" value="Display Numbers">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		// Get the user input
		$lowerLimit = $_POST['lowerLimit'];
		$upperLimit = $_POST['upperLimit'];
		
		// Loop through the range of numbers
		$currentNumber = $lowerLimit;
		do {
			// Check if the number is a multiple of 5 after adding 7
			$nextNumber = $currentNumber + 7;
			if ($nextNumber % 5 == 0) {
				// If it's a multiple of 5, display the picture
				echo '<img src="res/star.png" />';
			} else {
				// Otherwise, display the number followed by a space
				echo $currentNumber . ' ';
			}
			// Increment the current number
			$currentNumber++;
		} while ($currentNumber <= $upperLimit);
	}
	?>
</body>
</html>