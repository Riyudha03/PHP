<!DOCTYPE html>
<html>
<head>
	<title>Table with PHP</title>
	<style>
		table {
			border-collapse: collapse;
		}
		th, td {
			border: 1px solid black;
			padding: 8px;
			text-align: center;
		}
		.green {
			background-color: green;
			color: white;
		}
		.red {
			background-color: red;
			color: white;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Mata Kuliah</th>
			<th>SKS</th>
			<th>Jumlah SKS</th>
			<th>Keterangan</th>
		</tr>
		<?php
			$data = array(
				array('No' => '1', 'Nama' => 'Ridho', 'Mata Kuliah' => array('Pemrograman I', 'Praktikum Pemrograman I', 'Pengantar Lingkungan Lahan Basah', 'Arsitektur Komputer'), 'SKS' => array(2, 1, 2, 3)),
				array('No' => '2', 'Nama' => 'Ratna', 'Mata Kuliah' => array('Basis Data I', 'Praktikum Basis Data I', 'Kalkulus'), 'SKS' => array(2, 1, 3)),
				array('No' => '3', 'Nama' => 'Tono', 'Mata Kuliah' => array('Rekayasa Perangkat Lunak', 'Analisis dan Perancangan Sistem', 'Komputasi Awan', 'Kecerdasan Bisnis'), 'SKS' => array(3, 3, 3, 3))
			);

			foreach ($data as $row) {
				echo "<tr>";
				echo "<td>".$row['No']."</td>";
				echo "<td>".$row['Nama']."</td>";
				echo "<td>".implode("<br>", $row['Mata Kuliah'])."</td>";
				echo "<td>".implode("<br>", $row['SKS'])."</td>";
				echo "<td>".array_sum($row['SKS'])."</td>";
				echo "<td class='".(array_sum($row['SKS']) > 7 ? 'green' : 'red')."'>".(array_sum($row['SKS']) > 7 ? 'Tidak Revisi' : 'Perlu Revisi')."</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>