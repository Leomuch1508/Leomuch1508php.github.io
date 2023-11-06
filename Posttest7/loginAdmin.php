<?php
    session_start();
    require "function/koneksi.php";
    require "config_admin.php";
    var_dump($_SESSION);
    if (isset($_POST["admin_login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $admin_found = false;

        foreach ($admins as $admin) {
            if ($email === $admin["email"] && password_verify($password, $admin["password"])) {
                $admin_found = true;
                break;
            }
        }
    
        if ($admin_found == true) {
            $_SESSION['admin_login'] = true;
            $_SESSION['admin_email'] = $email;
            header("Location: Admin/admin.php");
            exit;
        }
        $eror = true;
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
                <h2>Form Login</h2>
                <?php
                if (isset($error)) {
                    echo "<p style='color: red;'>Email atau Password salah!</p>";
                }
                ?>
                <div class="inputBox">
                    <label for="signEmail" id="EmailLabel"></label>
                    <input type="email" name="email" maxlength="50" placeholder="Email"/>
                </div>
                <div class="inputBox">
                    <label for="signPassword" id="PasswordLabel"></label>
                    <input type="password" name="password" maxlength="15" placeholder="Password"/>
                </div>
                <div class="inputBox">
                    <button type="submit" name="admin_login" id="signUp">Sign Up</button>
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