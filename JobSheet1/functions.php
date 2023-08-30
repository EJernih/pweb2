<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fungsi</title>
</head>
<body>
<h2>Luas Persegi Panjang</h2>
<form method="post" action="">
    Panjang: <input type="number" name="p"><br>
    Lebar: <input type="number" name="l"><br>
    <input type="submit" name="hitung_pp" value="Hitung Luas Persegi Panjang">
</form>

<h2>Luas Lingkaran</h2>
<form method="post" action="">
    Jari-jari: <input type="number" name="r"><br>
    <input type="submit" name="hitung_lingkaran" value="Hitung Luas Lingkaran">
</form>

<?php
function hitungLuasPersegiPanjang($p, $l) {
    return $p * $l;
}

function hitungLuasLingkaran($r) {
    return 3.14 * $r *$r;

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["hitung_pp"])) {
        $p = $_POST["p"];
        $l = $_POST["l"];

        $luas_pp = hitungLuasPersegiPanjang($p, $l);
        echo "Luas persegi panjang dengan panjang $p dan lebar $l adalah: $luas_pp";
    }

    if (isset($_POST["hitung_lingkaran"])) {
        $r = $_POST["r"];

        $luas_lingkaran = hitungLuasLingkaran($r);
        echo "Luas lingkaran dengan jari-jari $r adalah: $luas_lingkaran";
    }
}
?>
</body>
</html>