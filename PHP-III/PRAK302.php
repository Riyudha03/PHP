<!DOCTYPE html>
<html>
<head>
	<title>Triangle Shape</title>
</head>
<body>
	<form method="post">
		<label for="height">Enter the height of the triangle:</label>
		<input type="number" name="height" required><br><br>
		<label for="image">Enter the image file path or URL:</label>
		<input type="text" name="image" required><br><br>
		<input type="submit" value="Create Triangle">
	</form>

	<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$height = $_POST["height"];
		$image = $_POST["image"];

		// Check if the image exists
		if(!file_exists($image) && !filter_var($image, FILTER_VALIDATE_URL)) {
			die("Invalid image file path or URL");
		}

		// Create the triangle
		$i = 0;
		while($i < $height) {
			echo str_repeat("&nbsp;", $i);
			echo str_repeat("<img src='$image' alt='*' />", $height - $i);
			echo "<br>";
			$i++;
		}
	}
	?>
</body>
</html>