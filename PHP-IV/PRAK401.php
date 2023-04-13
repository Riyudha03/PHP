<!DOCTYPE html>
<html>
<head>
	<title>Table Matrix</title>
	<style>
		table {
			border-collapse: collapse;
		}

		td {
			border: 3px solid black;
			width: 48px;
			height: 48px;
			text-align: center;
			vertical-align: middle;
		}
	</style>
</head>
<body>
	<form method="post">
		<label for="rows">Number of rows:</label>
		<input type="number" id="rows" name="rows" required><br><br>
		<label for="cols">Number of columns:</label>
		<input type="number" id="cols" name="cols" required><br><br>
		<label for="value">Enter values separated by commas:</label>
		<input type="text" id="value" name="value" required><br><br>
		<input type="submit" value="Create Matrix">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$rows = $_POST["rows"];
		$cols = $_POST["cols"];
		$values = explode(",", $_POST["value"]);

		// Create the matrix array
		$matrix = array();
		$count = 0;
		for ($i = 0; $i < $rows; $i++) {
			$row = array();
			for ($j = 0; $j < $cols; $j++) {
				if ($count >= count($values)) {
					// If there are no more values, leave the rest of the slots empty
					$row[] = "";
				} else {
					$row[] = $values[$count];
					$count++;
				}
			}
			$matrix[] = $row;
		}

		// Display the matrix table
		echo "<br><br><table>";
		for ($i = 0; $i < $rows; $i++) {
			echo "<tr>";
			for ($j = 0; $j < $cols; $j++) {
				echo "<td>" . $matrix[$i][$j] . "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	?>
</body>
</html>