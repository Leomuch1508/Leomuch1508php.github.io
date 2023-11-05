<?php
    session_start();
    require "function/koneksi.php";
    if (isset($_POST["tambah"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $noTelp = $_POST["no_telp"];
        $alamat = $_POST["alamat"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        if ($password === $cpassword) {
            $password = password_hash($password, PASSWORD_DEFAULT);

            $result = mysqli_query($conn, "select email from user where email = '$email'");

            if (mysqli_fetch_assoc($result)) {
                echo "
                    <script>
                        alert('Email sudah ada!');
                        document.location.href = 'tambah.php';
                    </script>";
            } else {
                $result = mysqli_query($conn, "insert into user (id, username, email, no_telp, alamat, password)
                values ('', '$username', '$email', '$noTelp', '$alamat', '$password')");

                if (mysqli_affected_rows($conn) > 0) {
                    echo "
                        <script>
                            alert('Register Berhasil!');
                            document.location.href = 'loginUser.php';
                        </script>";
                } else {
                    echo "
                        <script>
                            alert('Register Gagal!');
                            document.location.href = 'tambah.php';
                        </script>";
                }
            }
        } else {
            echo "
                <script>
                    alert('Password Tidak Sama!');
                    document.location.href = 'tambah.php';
                </script>";
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
    <form action="" method="POST">
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
                <h2>Form Register</h2>
                <div class="inputBox">
                    <label for="signUsername" id="UserLabel"></label>
                    <input type="text" name="username" maxlength="20" placeholder="Username"/>
                </div>
                <div class="inputBox">
                    <label for="signEmail" id="EmailLabel"></label>
                    <input type="email" name="email" maxlength="50" placeholder="Email"/>
                </div>
                <div class="inputBox">
                    <label for="signTel" id="TelLabel"></label>
                    <input type="tel" name="no_telp" maxlength="12" placeholder="No Telp"/>
                </div>
                <div class="inputBox">
                    <label for="signAdd" id="AddLabel"></label>
                    <input type="text" name="alamat" maxlength="50" placeholder="Alamat"/>
                </div>
                <div class="inputBox">
                    <label for="signPassword" id="PasswordLabel"></label>
                    <input type="password" name="password" maxlength="15" placeholder="Password"/>
                </div>
                <div class="inputBox">
                    <label for="signPassword" id="PasswordLabel"></label>
                    <input type="password" name="cpassword" maxlength="15" placeholder="Konfirmasi Password"/>
                </div>
                <div class="inputBox">
                    <button type="submit" name="tambah" id="signUp">Sign Up</button>
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