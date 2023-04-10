<!DOCTYPE html>
<html>
<head>
	<title>Output Program</title>
</head>
<body>
	<form method="post">
		<label for="input">Enter a number:</label>
		<input type="number" id="input" name="input" required>
		<button type="submit">Generate Output</button>
	</form>
	<?php
	if (isset($_POST['input'])) {
		$input = $_POST['input'];
		$count = 1;
		echo "<ol>";
		while ($count <= $input) {
			if ($count % 2 == 0) {
				echo "<li style='color:green'>Peserta ke-$count</li>";
			} else {
				echo "<li style='color:red'>Peserta ke-$count</li>";
			}
			$count++;
		}
		echo "</ol>";
	}
	?>
</body>
</html>
