<?php
    require('conexao.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $query = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

        if ($conn->query($query) === TRUE) {
            header("Location: index.php");
        } else {
            echo 'Erro ao cadastrar: ' . $conn->error;
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
    <title>Register</title>
</head>
<body>
    <header>
        <img src="./src/images/logo.png" alt="Logo from Spotify">
    </header>

    <section class="content">


        <div class="login">
            <div class="inputs">
                <form method="post">
                    <label for="email">Email address or username</label>
                    <input type="email" placeholder="Email address or username" id="email" name="email">
                    <br>
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" id="password" name="senha">
                    <input type="submit" value="cadastrar" class="loginbtn">
                </form>
            </div>
            <p class="divisa"></p>
        </div>

        <div class="register">
            <p class="don">Have an account?</p>
            <button class="registerbtn">Login for Spotify</button>
        </div>
    </section>

    <script>
        document.querySelector(".registerbtn").addEventListener('click', () => {
            window.location.href = "index.php"
        })
    </script>
</body>
</html>