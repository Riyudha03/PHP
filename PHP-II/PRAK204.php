<!DOCTYPE html>
<html>
<head>
  <title>Length of Numbers</title>
</head>
<body>
  <h1>Length of Numbers</h1>
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="number">Enter a number (between 0 and 999):</label><br>
    <input type="number" id="number" name="number" min="0" max="9999" required><br>
    <input type="submit" value="Submit">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $number = $_POST['number'];

      // Check if the input number is 0
      if ($number == 0) {
        echo "Nol";
      }
      // Check if the input number is within the allowed range
      elseif ($number < 0 || $number >= 1000) {
        echo "Nilai input Anda melebihi limit bilangan.";
      } else {
        // Get the number of digits in the input number
        $num_digits = strlen($number);

        // Check the number of digits and display the corresponding result
        switch ($num_digits) {
          case 1:
            echo "Satuan";
            break;
          case 2:
            // Check if the first digit is 1
            if (substr($number, 0, 1) == '1') {
              echo "Belasan";
            } else {
              echo "Puluhan";
            }
            break;
          case 3:
            echo "Ratusan";
            break;
        }
      }
    }
  ?>
</body>
</html>
