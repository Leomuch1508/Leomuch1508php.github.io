<?php
    require "function/koneksi.php";

    $result = mysqli_query($conn, "select * from lapangan");

    $lapangan = [];
    date_default_timezone_set('Asia/Makassar');
    $date = date('d M Y H:i:s');

    while ($row = mysqli_fetch_assoc($result)) {
        $lapangan[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manajemen Data Lapangan</title>
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="dataLapangan.css"> 
        <script src="https://kit.fontawesome.com/effd3867de.js"crossorigin="anonymous"></script>
    </head>
    <body>
        <nav>
            <div class="logo">
                <li><a href="index.html"><button><i class="fa fa-sign-out-alt"></i></button></a></li>
            </div>
            <div class="logo">
                <p><a href="index.html">Blue Sport</a></p>
            </div>
            <ul class="nav-links">
                <?= $date ?> 
            </ul>
            <ul class="nav-links">
                <p>Admin</p>
                <li><a href="#"><button><i class="fa fa-user"></i></button></a></li>
            </ul>
            <span class="toggleBox"><i class="fa-solid fa-bars" id="toggle-bar"></i></span>
        </nav>
        <header>
            <table >
                <div class="admin">
                    <div class="section">
                        <p>Manajemen Data Lapangan</p>
                        <tbody>
                            <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th colspan="2">Hapus</th>
                        </tr>
                        <?php $i = 1;
                        foreach ($lapangan as $lpg) : ?>
                        <tr>
                            <td> <?= $i; ?> </td>
                            <td> <img style='display:block;' width='200px' height='200px' src="img/<?= $lpg['lapangan'] ?>"> </td>
                            <td><a href="hapusLapangan.php?id=<?=$lpg["id"];?>">hapus</a>
                            </td>
                        </tr>
                        <?php $i++;
                        endforeach; ?>
                        </tbody>
                    </div>
                </div>
            </table>
        </header>
    </body>

</html>