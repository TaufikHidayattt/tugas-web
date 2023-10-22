<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2d</title>
</head>

<body>

    <?php
    function Prima($number)
    {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    echo "Pengulangan untuk Mencari kategori bilangan :";
    echo "<br>";
    for ($taufik_hidayat = 1; $taufik_hidayat <= 19; $taufik_hidayat++) {
        echo "<br>";
        if ($taufik_hidayat % 2 == 0) {
            echo "<li>Angka $taufik_hidayat adalah bilangan genap";
        } else {
            echo "<li>Angka $taufik_hidayat adalah bilangan ganjil";
        }

        if (Prima($taufik_hidayat)) {
            if ($taufik_hidayat > 10) {
                echo " dan sekaligus bilangan prima";
            } else {
                echo " sekaligus bilangan prima";
            }
        }
    }

    ?>


</body>

</html>