<?php
$PenemuPenemuTerkenalDidunia = Array(

    "penemu 1" => array(
        "Nama" => "Albert Einstein",
        "Penjelasan" => "Albert Einstein adalah seorang fisikawan teoretis kelahiran Jerman yang terkenal dengan pengembangan teori relativitas.",
        "Asal" => "jerman",
        "Tahun kelahiran" => "1879",
        "Gambar" => "albert.jpg"
    ),
    "penemu 2" => array(
        "Nama" => "Alessandro volta",
        "Penjelasan" => " Alessandro Volta adalah ilmuwan Fisika yang berasal dari Italia, beliau terlahir dengan nama lengkap Alessandro Giuseppe Antonio Anastasio Volta.",
        "Asal" => "italia",
        "Tahun kelahiran" => "1745",
        "Gambar" => "Alessandro_Volta.jpeg"
    ),
    "penemu 3" => array(
        "Nama" => "Alexander Graham Bell",
        "Penjelasan" => "Alexander Graham Bell (lahir Alexander Bell; 3 Maret 1847 – 2 Agustus 1922) adalah seorang ilmuwan, penemu, dan insinyur kelahiran Skotlandia.",
        "Asal" => "Amerika Serikat",
        "Tahun kelahiran" => "1847",
        "Gambar" => "Alexander_Graham_Bell.jpg"
    ),
    "Penemu 4" => array(
        "Nama" => "Alfred Nobel",
        "Penjelasan" => "Alfred Bernhard Nobel (Swedia: [ˈǎlfrɛd nʊˈbɛlː] ( simak); 21 Oktober 1833 – 10 Desember 1896) ialah seorang kimiawan, insinyur, dan pebisnis asal Swedia yang menemukan dinamit.",
        "Asal" => "Swedia",
        "Tahun kelahiran" => "1833",
        "Gambar" => "AlfredNobel.jpg"
    ),
    "Penemu 5" => array(
        "Nama" => "Anthony Van Leuwenhook",
        "Penjelasan" => "Menemukan protozoa Deskripsi sel darah merah pertama Karier ilmiah.",
        "Asal" => "belanda",
        "Tahun kelahiran" => "1632",
        "Gambar" => "anthony.jpg"
    ),
    "Penemu 6" => array(
        "Nama" => "Antonio Meucci",
        "Penjelasan" => "Penemu telepon, inovator, pengusaha, pendukung unifikasi Italia.",
        "Asal" => "italia",
        "Tahun kelahiran" => "1808",
        "Gambar" => "antoni_meucci.jpg"
    ),
    "Penemu 7" => array(
        "Nama" => "Artur Fischer",
        "Penjelasan" => "Ia terkenal karena menemukan sumbat dinding plastik yang mengembang.",
        "Asal" => "jerman",
        "Tahun kelahiran" => "1919",
        "Gambar" => "artur_fischer.jpg"
    ),
    "Penemu 8" => array(
        "Nama" => " Benjamin Franklin ",
        "Penjelasan" => "seorang wartawan, penerbit, pengarang, filantropis, abolisionis, pelayan masyarakat (pejabat), ilmuwan, diplomat, dan penemu.",
        "Asal" => "Amerika Serikat",
        "Tahun kelahiran" => "1706",
        "Gambar" => "Benjamin_Franklin.jpg"
    ),
    "Penemu 9" => array(
        "Nama" => " Benjamin Holt ",
        "Penjelasan" => "seorang pengusaha dan penemu Amerika yang mematenkan dan memproduksi traktor tapak tipe crawler praktis pertama.",
        "Asal" => "Amerika Serikat",
        "Tahun kelahiran" => "1849",
        "Gambar" => "benjamin_holt.jpg"
    ),
    "Penemu 10" => array(
        "Nama" => "Bette Nesmith Graham",
        "Penjelasan" => "seorang artis komersial Amerika Serikat dan penemu Tipp-Ex. Ia adalah ibu dari musisi dan produser Michael Nesmith dari The Monkees.",
        "Asal" => "Amerika Serikat",
        "Tahun kelahiran" => "1924",
        "Gambar" => "bette_nesmith.jpg"
    ),
);

    // manambahkan tabel
    echo "<table border='1'>";
    echo "<tr><th>No</th><th>Nama</th><th>Penjelasa</th><th>Asal</th><th>Tahun kelahiran</th><th>Gambar</th></tr>";
    $nomor = 1;
    foreach ($PenemuPenemuTerkenalDidunia as $penemu) {
        echo "<tr>";
        echo "<td>$nomor</td>";
        echo "<td>" . $penemu["Nama"] . "</td>";
        echo "<td>" . $penemu["Penjelasan"] . "</td>";
        echo "<td>" . $penemu["Asal"] . "</td>";
        echo "<td>" . $penemu["Tahun kelahiran"] . "</td>";
        echo "<td><img src='" . $penemu["Gambar"] . "' alt='" . $penemu["Nama"] . "' width='100'></td>";
        echo "</tr>";
        $nomor++;
    }
    echo "</table>";
    ?>
    
    