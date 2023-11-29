<?php
    session_start();
    require('conexao.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header('Location: sucessful.php');
        } else {
            echo 'Email ou senha incorretos.';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-logo-spotify-symbol-3.png" type="image/x-icon">

    <link rel="stylesheet" href="./src/css/style.css">
    <title>Login</title>
</head>
<body>
    <header>
        <img src="./src/images/logo.png" alt="Logo from Spotify">
    </header>

    <section class="content">

        <div class="login-social-media">
            <div class="facebook">
                <img src="./src/images/facebook-icon.png" alt="icon facebook">
                <p>Continue with Facebook</p>
            </div>

            <div class="apple">
                <img src="./src/images/apple-icon.png" alt="icon apple">
                <p>Continue with Apple</p>
            </div>

            <div class="google">
                <img src="./src/images/google-iconz.png" alt="icon apple" width="24px" height="24px">
                <p>Continue with Google</p>
            </div>

            <div class="ord">
                <span></span> <p class="or">OR</p> <span></span>
            </div>
        </div>

        <div class="login">
            <div class="inputs">
                <form method="post">
                    <label for="email">Email address or username</label>
                    <input type="email" placeholder="Email address or username" id="email" name="email">
                    <br>
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" id="password" name="senha">

                    <input type="submit" value="login" class="loginbtn">
                </form>
                    
            </div>
            <p class="passw">Forgot your password?</p>
            <p class="divisa"></p>
        </div>

        <div class="register">
            <p class="don">Don't have an account?</p>
            <button class="registerbtn">Sign up for Spotify</button>
        </div>
    </section>

    <script>
        document.querySelector('.registerbtn').addEventListener('click', () => {
            window.location.href = "register.php"
        })
    </script>
</body>
</html>