<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <input type="text" name="text" pattern="[A-Za-z]+">
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
    <?php 
        if(isset($_POST['text']) && $_POST['text']!=""){
            $text = strtolower($_POST['text']);
            $length = strlen($text);
            for ($i=0; $i < $length; $i++) { 
                echo strtoupper($text[$i]);
                for ($j=1; $j < $length; $j++) { 
                    echo $text[$i];
                }
            }
        }
    ?>
</body>
</html>