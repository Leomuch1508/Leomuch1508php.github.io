<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blue Futsal</title>
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="main.css" />
    <script src="https://kit.fontawesome.com/effd3867de.js"crossorigin="anonymous">
    </script>
  </head>
  <body id="body">
    <nav>
      <div class="about">
        <li>
          <a href="about.html"><button>About Me</button></a>
        </li>
      </div>
      <div class="logo">
        <p><a href="index.php">Blue Sport</a></p>
      </div>
      <ul class="nav-links">
        <li>
          <a href="index.php">
            <button>Home</button>
          </a>
        </li>
        <li>
          <a href="loginAdmin.php"><button>Admin</button></a>
        </li>
        <li>
          <a href="loginUser.php"><button>User</button></a>
        </li>
        <li>
          <a href="tambah.php"><button>Sign Up</button></a>
        </li>
        <li id="light-mode-toggle">
          <button onclick="toggleLightMode()"><i class="fas fa-sun" id="icon"></i></button>
        </li>
      </ul>
      <span class="toggleBox"
        ><i class="fa-solid fa-bars" id="toggle-bar"></i
      ></span>
    </nav>
    <header id="header">
      <div class="left-section">
        <div class="text-section">
          <p class="title">Blue Sport</p>
          <p class="description">
            Nikmati kelebihan bermain Futsal di <span>Blue Sport</span>
            , Promo spesial dengan fasilitas menarik
          </p>
        </div>
      </div>
      <div class="right-section">
        <p>Mulai Bermain</p>
        <div class="showing">
          <div class="showing-image"></div>
        </div>
      </div>
    </header>
    <script src="script.js"></script>
    <link rel="stylesheet" href="script.js">
  </body>
</html>
