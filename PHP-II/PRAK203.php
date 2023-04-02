<!DOCTYPE html>
<html>
<head>
	<title>Temperature Converter</title>
</head>
<body>
	<h2>Temperature Converter</h2>
	<form method="post">
		<label>Enter Temperature:</label>
		<input type="number" name="temperature" required><br><br>

		<label>Starting Temperature:</label>
		<br>
		<input type="radio" name="starting_temp" value="celsius" checked>Celsius<br>
		<input type="radio" name="starting_temp" value="fahrenheit">Fahrenheit<br>
		<input type="radio" name="starting_temp" value="reamur">Reamur<br>
		<input type="radio" name="starting_temp" value="kelvin">Kelvin<br><br>

		<label>Target Temperature:</label>
		<br>
		<input type="radio" name="target_temp" value="celsius">Celsius<br>
		<input type="radio" name="target_temp" value="fahrenheit">Fahrenheit<br>
		<input type="radio" name="target_temp" value="reamur">Reamur<br>
		<input type="radio" name="target_temp" value="kelvin" checked>Kelvin<br><br>

		<input type="submit" name="submit" value="Convert">
	</form>
	<br>

	<?php
	if(isset($_POST['submit'])){
		$temperature = $_POST['temperature'];
		$starting_temp = $_POST['starting_temp'];
		$target_temp = $_POST['target_temp'];

		$result = 0;

		// convert to Celsius first
		switch($starting_temp){
			case "celsius":
				$celsius = $temperature;
				break;
			case "fahrenheit":
				$celsius = ($temperature - 32) * 5/9;
				break;
			case "reamur":
				$celsius = $temperature * 5/4;
				break;
			case "kelvin":
				$celsius = $temperature - 273.15;
				break;
		}

		// convert to target temperature
		switch($target_temp){
			case "celsius":
				$result = $celsius;
				break;
			case "fahrenheit":
				$result = ($celsius * 9/5) + 32;
				break;
			case "reamur":
				$result = $celsius * 4/5;
				break;
			case "kelvin":
				$result = $celsius + 273.15;
				break;
		}

		// round result
		$result = round($result, 1);

		// display result
		echo "<p>" . $temperature . " " . $starting_temp . " is equal to " . $result . " " . $target_temp . "</p>";
	}
	?>
</body>
</html>