<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="layout/assets/css/style.css">
</head>

<body>
    <div class="utama">
        <div class="kepala">
            <center><img src="layout/assets/images/Header.png" alt=""></center>
        </div>
        <center>
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="userstampil.php">Users</a>
                <a href="categorytampil.php">Category</a>
                <a href="posttampil.php">Post</a>
                <a href="photostampil.php">Photos</a>
                <a href="albumtampil.php">Album</a>
                <a href="logout.php">LogOut</a>
            </div>
        </center>
        <div class="isi">
            <?php
            if (isset($_GET['page'])) {
                include $_GET['page'] . ".php";
            } else {
                include "main.php";
            }

            ?>
        </div>
        <div class="footer">
            <center>Copyright by Laila</center>
        </div>
    </div>
</body>

</html>