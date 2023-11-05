<?php 
    require"../function/koneksi.php";
    
    session_start();
    $email = $_SESSION["email"];
    $result = mysqli_query($conn, "select * from user where email = '$email'");
    $user = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Sport</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="movie.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    
    <script src="https://kit.fontawesome.com/effd3867de.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <li id="light-mode-toggle">
            <button onclick="toggleLight2()"><i class="fas fa-sun" id="icon"></i></button>
          </li>
        <div class="logo">
            <p><a href="../index.php">Blue Sport</a></p>
        </div>
        <div class="toggle"></div>
        <ul class="nav-links">
            <p><?php echo $user['username']; ?></p>
            <li><a href="../index.php"><button><i class="fa fa-user"></i></button></a></li>
        </ul>
        <span class="toggleBox"><i class="fa-solid fa-bars" id="toggle-bar"></i></span>
    </nav>
<!----------------MOVIE SECTION-------------------->
    <main>
        <p class="genre">Lapangan</p>
        <div class="video-section">
            <button class="prev-button"><img src="img/nextBtn.png" alt=""></button>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#"><img src="img/lapangan 2.jpg" alt=""></a>
                        <p class="title">Lapangan 1</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="img/lapangan 3.jpg" alt=""></a>
                        <p class="title">Lapangan 2</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="img/lapangan 1.jpg" alt=""></a>
                        <p class="title">Lapangan 3</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="img/lapangan 2.jpg" alt=""></a>
                        <p class="title">Lapangan 4</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="img/lapangan 3.jpg" alt=""></a>
                        <p class="title">Lapangan 5</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="#"><img src="img/lapangan 1.jpg" alt=""></a>
                        <p class="title">Lapangan 6</p>
                    </div>
                </div>
            </div>
            <button class="next-button"><img src="img/nextBtn.png" alt=""></button>
        </div>
    </main>
    <footer>
        <div class="socials">
            <h4>Socials</h4>
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i>
                Blue Futsal Official</a>
            <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i>
                Blue Futsal Samarinda</a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i>
                SportBlue_Futsal</a>
            </div>
            <div class="other-links">
                <h4>Other Links</h4>
                <a href="../index.html">Home</a>
                <a href="../index.html">Home</a>
                <a href="../index.html">Home</a>
            </div>
        <div class="contacts">
            <h4>Hubungi Kami</h4>
            <a href="https://t.me/Blue Futsal" target="_blank"><i class="fab fa-telegram"></i>
                Blue Futsal</a>
            <a href="mailto:bangmessi82@gmail.com">bangmessi82@gmail.com</a>
            <a href="tel:+6281222449989">0812-2244-9989</a>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="movie.js"></script>
    <script src="../script.js"></script>
</body>
</html>
