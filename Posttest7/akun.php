<?php
    require "function/koneksi.php";

    $result = mysqli_query($conn, "select * from user");

    $user = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $user[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manajemen Data Akun</title>
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="akun.css"> 
        <script src="https://kit.fontawesome.com/effd3867de.js"crossorigin="anonymous"></script>
    </head>
    <body>
        <nav>
            <div class="logo">
                <li><a href="index.php"><button><i class="fa fa-sign-out-alt"></i></button></a></li>
            </div>
            <div class="logo">
                <p><a href="#">Blue Sport</a></p>
            </div>
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
                        <p>Manajemen Data Akun</p>
                        <tbody>
                            <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th colspan="2">Edit/Hapus</th>
                        </tr>
                        <?php $i = 1;
                        foreach ($user as $usr) : ?>
                        <tr>
                            <td> <?= $i; ?> </td>
                            <td> <?php echo $usr["username"] ?> </td>
                            <td> <?= $usr["email"] ?> </td>
                            <td> <?= $usr["no_telp"] ?> </td>
                            <td> <?= $usr["alamat"] ?> </td>
                            <td><a href="function/edit.php?id=<?=$usr["id"];?>">Edit</a></td>
                            <td><a href="function/hapus.php?id=<?=$usr["id"];?>">hapus</a>
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