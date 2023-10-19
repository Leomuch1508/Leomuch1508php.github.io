<?php
    require "koneksi.php";

    $result = mysqli_query($conn, "SELECT * FROM user");
    $menu = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $menu[] = $row;
    }
?>