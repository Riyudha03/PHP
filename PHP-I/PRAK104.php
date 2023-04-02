<!DOCTYPE html>
<html>
<head>
	<title>PRAK104</title>
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
			background-color: #f2f2f2;
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
        // Define an indexed array with some data
        $fruits [0]= "Samsung Galaxy S22";
        $fruits [1]= "Samsung Galaxy S22+"; 
        $fruits [2]= "Samsung Galaxy A03"; 
        $fruits [3]= "Samsung Galaxy Xcover 5";
        // Display a table with the array data
        echo "<table>\n";
        echo "<tr><th>Daftar Smartphone Samsung</th></tr>\n";
        foreach ($fruits as $fruit) {
            echo "<tr><td>$fruit</td></tr>\n";
        }
        echo "</table>\n";
        ?>
	</table>
</body>
</html>