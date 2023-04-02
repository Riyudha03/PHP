<!DOCTYPE html>
<html>
<head>
	<title>PRAK105</title>
	<style>
		table {
			border-collapse: collapse;
			width: 300px;
            border: 2px solid #ddd;
		}

		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 2px solid #ddd;
		}

		th {
			background-color: #0066ff;
			color: #333;
		}
        
		tr:hover {
			background-color: #e0e0e0;
		}
	</style>
</head>
<body>
	<table>
        <?php
        // create an associative array
        $cities = array(
            "Samsung Galaxy S22",
            "Samsung Galaxy S22+",
            "Samsung Galaxy A03",
            "Samsung Galaxy Xcover 5"
        );
        // create the table headers
        echo "<table>";
        echo "<tr><th>Daftar Smartphone Samsung</th></tr>";
        // loop through the associative array and display the data as table rows
        foreach($cities as $city) {
            echo "<tr>";
            echo "<td>".$city.""."</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
	</table>
</body>
</html>