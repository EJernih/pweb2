<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching PHP</title>
</head>
<body>

<form method="post" action="">
    Nilai x: <input type="number" name="x">
    <input type="submit" value="Cek">
</form>

    <?php

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST["x"];
    echo "Nilai x = $x </br></br>";  
   
    if ($x > 0){
        echo "$x merupakan bilangan positif";
    }
    elseif ($x < 0){
        echo "$x merupakan bilangan negatif";
    }
    else {
       echo "$x bilangan nol ";   
    }
}
    ?>
</body>
</html>