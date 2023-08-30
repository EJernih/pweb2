<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
    $x= "Selamat Belajar PHP!";
    echo "$x </br></br>";
    echo strtoupper ("$x </br></br>");
    echo strtolower ("$x </br></br>");
    echo substr ($x, 0, 7);
    echo substr ($x, 3, 12);
    echo substr ($x, 6, 10);
    ?>
</body>
</html>