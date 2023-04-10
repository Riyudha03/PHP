<!DOCTYPE html>
<html>
<head>
	<title>Number of Stars</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="star-count">Enter the number of stars:</label>
		<input type="number" id="star-count" name="star-count">
		<input type="submit" value="Show Stars">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$starCount = $_POST["star-count"];
			$imagePath = "res/star.png";
			$message = "Jumlah bintang: " . $starCount;
			echo "<p>$message</p>";
			
			// Display stars
			for ($i=0; $i < $starCount; $i++) { 
				echo "<img src=\"$imagePath\">";
			}

			// Display buttons to add or remove stars
			echo "<form method=\"post\" action=\"$_SERVER[PHP_SELF]\">";
			echo "<input type=\"hidden\" name=\"star-count\" value=\"$starCount\">";
			echo "<input type=\"submit\" name=\"add-star\" value=\"Tambah\">";
			echo "<input type=\"submit\" name=\"remove-star\" value=\"Kurang\">";
			echo "</form>";

			// Handle add star button click
			if (isset($_POST["add-star"])) {
				$starCount++;
				header("Location: " . $_SERVER['PHP_SELF'] . "?star-count=$starCount");
			}

			// Handle remove star button click
			if (isset($_POST["remove-star"])) {
				$starCount--;
				header("Location: " . $_SERVER['PHP_SELF'] . "?star-count=$starCount");
			}
		}
	?>
</body>
</html>