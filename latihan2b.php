<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Modul 2 - Latihan2b </title>
    <style>
        .kotak {
            border: 3px solid blueviolet;
            padding: 10px;
            margin: 10px;
            width: 30%;
        }


        .clear {
            border: 3px solid black;
            padding: 10px;
            width: 24px;
            height: 24px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="kotak">

        <?php
        for ($taufik_hidayat = 1; $taufik_hidayat <= 5; $taufik_hidayat++) {
            for ($taufik = 1; $taufik <= $taufik_hidayat; $taufik++) {
                echo "<div class='clear'>" . $taufik . "</div>";
            }
            echo "<br>";
        }
        ?>

    </div>
    
    <br>

    <p>
        <i>
            
        </i>
    </p>
    
</body>

</html>