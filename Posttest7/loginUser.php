<?php
    session_start();
    require "function/koneksi.php";
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email'");

        if ($result && mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $last_email = $conn->insert_email;
            $_SESSION["email"] = $last_email;
    
            if (password_verify($password, $row["password"])) {
                $_SESSION['login'] = true;
                $_SESSION['email'] = $row['email'];
                header("Location: ./lapangan/movie.php");
                exit;
            } else {
                $error = true;
            }
        } else {
            $error = true;
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
                    <button type="submit" name="login" id="signUp">Sign Up</button>
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