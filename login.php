<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

$connect = mysqli_connect("sql200.infinityfree.com", "if0_34412521", "RTqkC9l2X6WN3J8", "if0_34412521_login");

if (isset($_POST["masuk"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($connect, "SELECT * FROM user WHERE nama = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        if ($password) {

            // set session
            $_SESSION["login"] = true;

            echo "<script>
                        confirm('Berhasil masuk');
                        document.location.href = 'index.php';
                    </script>";

            // header("Location: index.php");
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-MENANTEA</title>
    <link rel="icon" href="img/logoicon.png">
    <link rel="stylesheet" href="assets/vendor/css/login.css">
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <div id="login" class="login-page">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h1 class="Login">LOGIN</h1>
                </div>
            </div>
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;">Username/Password salah!</p>
            <?php endif; ?>

            <form name="quiz-samuel-login" class="login-form" id="form1" action="" method="POST" autocomplete="off">
                <input class="input" type="text" name="username" placeholder="username" id="username" minlength="3" autofocus>
                <input type="email" name="email" placeholder="email" id="email">
                <input class="input pass" type="password" name="password" placeholder="password" id="password">
                <br>
                <button class="btn btn-primary btn-block btn-large" type="submit" value="Login" name="masuk">Login</button>
            </form>

            <div class="daftar">
                <p>Belum punya akun? <span class="span"><a href="signup.php">Daftar</a></span> </p>
            </div>

        </div>
    </div>
</body>

</html>