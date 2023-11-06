<?php 
    require"../function/koneksi.php";
    session_start();
    if(!isset($_SESSION["admin_login"])) {
        header("Location: ../loginAdmin.php");
        exit;
    }
    // $email = $_SESSION["email"];
    // $result = mysqli_query($conn, "select * from user where email = '$email'");
    // $user = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Futsal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="footer.css">

    <script src="https://kit.fontawesome.com/effd3867de.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="logo">
            <li><a href="../index.html"><button><i class="fa fa-sign-out-alt"></i></button></a></li>
        </div>
        <div class="logo">
            <p><a href="../index.html">Blue Sport</a></p>
        </div>
        <ul class="nav-links">
            <p>Muchlas</p>
            <li><a href="#"><button><i class="fa fa-user"></i></button></a></li>
        </ul>
        <span class="toggleBox"><i class="fa-solid fa-bars" id="toggle-bar"></i></span>
    </nav>
    <header>
        <div class="right-section">
            <p>Admin</p>
            <div class="showing">
                <div class="showing-image"></div>
            </div>
        </div>
        <div class="left-section">
            <h1></h1>
            <p><a href="../akun.php">1. Manajemen Data Akun</a></p>
            <p><a href="../lapangan.php">2. Manajemen Data Lapangan</a></p>
            <p><a href="../tambahLapangan.php">3. Tambah Data Lapangan</a></p>
            <h1></h1>
        </div>
    </header>
</body>
</html>