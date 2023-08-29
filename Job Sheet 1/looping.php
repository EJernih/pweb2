<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping PHP</title>
</head>
<body>
    <?php
    //FOR BILANGAN GENAP 1-
    echo "perulangan FOR bilangan genap 1-10</br></br>";
    for($x=2; $x<=10; $x+=2)
    echo "$x </br></br>";

    //while bilangan ganjil 1-10
    echo "perulangan WHILE bilangan ganjil 1-10</br></br>";
    $y=1;
    while($y<=10){
        echo "$y </br></br>";
         $y+=2;
    }

    //do..while bilangan prima kurang dari 20
    echo "perulangan do...while bilangan prima kurang dari 20</br></br>";
    $z=1;

    do {
        $prima = true;
    
        if ($z <= 1) {
            $prima = false;
        } else {
            for ($i = 2; $i <= $z / 2; $i++) {
                if ($z % $i == 0) {
                    $prima = false;
                    break;
                }
            }
        }
    
        if ($prima) {
            echo "Bilangan prima: $z <br>";
        }
    
        $z++;
    } while ($z <= 20);
    ?>
</body>
</html>