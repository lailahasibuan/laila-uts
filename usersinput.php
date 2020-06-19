<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">

<body>

    <div class="utama">
        <div class="kepala">
            <center><img src="layout/assets/images/header.png" alt=""></center>
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
        <center>
            <h2>ADD Users</h2>
        </center>
        <form method="POST" action="usersproses.php">
            <table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#DCFFFB" align="center">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="SIMPAN"></td>
                </tr>
            </table>
        </form>