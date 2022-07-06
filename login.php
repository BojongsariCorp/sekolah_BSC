<?php
session_start();
include 'koneksikexampp.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Halaman Login</title>
</head>

<body>
    <!-- Login page -->
    <div class="page-login">

        <!-- box -->
        <div class="box box-login">

            <!-- Box Header -->
            <div class="box-header text-center">
                Login
            </div>

            <!-- Box Body -->
            <div class="box-body">

            <?php
                if (isset($_GET['msg'])){
                    echo "<div class='alert alert-error'>".$_GET['msg']."</div>";
                }
            ?>

                <!-- form login -->
                <form action="" method="POST">

                    <div class="form-group">
                        <Label>Username</Label>
                        <input type="text" name="user" placeholder="Type your username here!" class="input-control">
                    </div>

                    <div class="form-group">
                        <Label>Password</Label>
                        <input type="password" name="pass" placeholder="Type your password here!" class="input-control">
                    </div>

                    <input type="submit" name="submit" value="Login" class="btn">

                </form>

                <?php
                
                    if (isset($_POST['submit'])) {

                        $user = mysqli_real_escape_string($conn, $_POST['user']);
                        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

                        $cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '" .$user. "' ");
                        if (mysqli_num_rows($cek) > 0) {

                            $d = mysqli_fetch_object($cek);
                            if (md5($pass) == $d->password) {

                                $_SESSION['status_login']   = true;
                                $_SESSION['uid']            = $d->id;
                                $_SESSION['uname']          = $d->nama;
                                $_SESSION['ulevel']         = $d->level;

                                echo "<script>window.location = 'admin/index.php'</script>";
                            } else {
                                echo '<div class="alert alert-error">Password salah</div>';
                            }

                        } else {
                            echo '<div class="alert alert-error">Username tidak ditemukan</div>';
                        }
                    }

                ?>

            </div>

            <!-- Box Footer -->
            <div class="box-footer text-center">
                <a href="index.php">Halaman Utama</a>
            </div>

        </div>

    </div>

</body>

</html>