<!DOCTYPE html>
<html>
<head>
	<title>Rekapitulasi Nilai Mahasiswa</title>
</head>
<body>
	<h1>Rekapitulasi Nilai Mahasiswa</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Nilai UTS</th>
			<th>Nilai UAS</th>
			<th>Nilai Akhir</th>
			<th>Huruf</th>
		</tr>
		<?php
		// Define the student data using a multidimensional array
		$students = array(
			array("Andi", "21010001", 87, 65),
			array("Budi", "21010002", 76, 79),
			array("Toni", "21010003", 50, 41),
			array("Jessica", "21010004", 60, 75)
		);

		// Calculate final grade and letter grade for each student and display in table
		foreach ($students as $student) {
			$uts = $student[2];
			$uas = $student[3];
			$nilai_akhir = number_format(0.4 * $uts + 0.6 * $uas, 1);
			$huruf = "";
			if ($nilai_akhir > 80) {
				$huruf = "A";
			} elseif ($nilai_akhir >= 70 && $nilai_akhir <= 79) {
				$huruf = "B";
			} elseif ($nilai_akhir >= 60 && $nilai_akhir <= 69) {
				$huruf = "C";
			} elseif ($nilai_akhir >= 50 && $nilai_akhir <= 59) {
				$huruf = "D";
			} else {
				$huruf = "E";
			}
			echo "<tr><td>".$student[0]."</td><td>".$student[1]."</td><td>".$uts."</td><td>".$uas."</td><td>".$nilai_akhir."</td><td>".$huruf."</td></tr>";
		}
		?>
	</table>
</body>
</html>