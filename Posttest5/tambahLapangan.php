<?php
    require "function/koneksi.php";
    session_start();
    if (isset($_POST["tambahLapangan"])) {
        $lapangan = $_FILES["lapangan"]["name"];
        $explode = explode(".", $lapangan);
        $extention = strtolower(end($explode));
        $gambar = date("Y-m-d"). $lapangan;
        $temp = $_FILES['lapangan']['tmp_name'];

        if (move_uploaded_file($temp, 'img/' . $gambar)) {
            $result = mysqli_query($conn, "insert into lapangan 
            (id, lapangan) 
            values ('', '$gambar')");
    
            if ($result) {
                echo "
                        <script>
                        alert('Data Berhasil Ditambahkan!');
                        document.location.href = 'Admin/admin.html';
                        </script>
                    ";
            } else {
                echo "
                    <script>
                    alert('Data Gagal Ditambahkan!');
                    document.location.href = 'Admin/admin.html';
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signUp.css">
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <section>
            <div class="Leaves">
                <div class="set">
                    <div><img src="images/leaf_01.png"></div>
                    <div><img src="images/leaf_02.png"></div>
                    <div><img src="images/leaf_03.png"></div>
                    <div><img src="images/leaf_04.png"></div>
                    <div><img src="images/leaf_01.png"></div>
                    <div><img src="images/leaf_02.png"></div>
                    <div><img src="images/leaf_03.png"></div>
                    <div><img src="images/leaf_04.png"></div>
                </div>
            </div>
            <img src="images/bg.jpg" class="bg">
            <img src="images/animasi.png" class="girl">
            <div class="Login">
                <h2>Form Tambah Lapangan</h2>
                <div class="inputBox">
                    <label for="Lapangan" id="UserLabel"></label>
                    <input type="file" name="lapangan" maxlength="20" placeholder="lapangan"/>
                </div>
                <div class="inputBox">
                    <button type="submit" name="tambahLapangan" id="signUp">Tambah</button>
                </div>
            </div>
            <img src="images/trees.png" class="trees">
        </section>
    </form>
    <script src="signUp.js"></script>
    <script src="/Admin/min.js"></script>
    <script src="/Admin/minn.js"></script>
</body>
</html>