<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
</head>
<body>

<?php
$namaErr = $nimErr = $jkErr = "";
$nama = $nim = $jk = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["nama"])) {
		$namaErr = "Nama tidak boleh kosong";
	} else {
		$nama = test_input($_POST["nama"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
			$namaErr = "Hanya boleh menggunakan huruf"; 
		}
	}

	if (empty($_POST["nim"])) {
		$nimErr = "NIM tidak boleh kosong";
	} else {
		$nim = test_input($_POST["nim"]);
		// check if nim only contains numbers
		if (!preg_match("/^[0-9]*$/",$nim)) {
			$nimErr = "Hanya boleh menggunakan angka"; 
		}
	}

	if (empty($_POST["jk"])) {
		$jkErr = "Jenis Kelamin tidak boleh kosong";
	} else {
		$jk = test_input($_POST["jk"]);
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Nama: <input type="text" name="nama" value="<?php echo $nama;?>">
	<span class="error">* <?php echo $namaErr;?></span>
	<br><br>
	NIM: <input type="text" name="nim" value="<?php echo $nim;?>">
	<span class="error">* <?php echo $nimErr;?></span>
	<br><br>
	Jenis Kelamin: 
	<input type="radio" name="jk" <?php if (isset($jk) && $jk=="Laki-laki") echo "checked";?> value="Laki-laki">Laki-laki
	<input type="radio" name="jk" <?php if (isset($jk) && $jk=="Perempuan") echo "checked";?> value="Perempuan">Perempuan
	<span class="error">* <?php echo $jkErr;?></span>
	<br><br>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
if (!empty($nama) && !empty($nim) && !empty($jk)) {
	echo "<h2>Data Mahasiswa</h2>";
	echo "Nama: " . $nama . "<br>";
	echo "NIM: " . $nim . "<br>";
	echo "Jenis Kelamin: " . $jk . "<br>";
}
?>

</body>
</html>