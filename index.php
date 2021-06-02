<?php
    if(isset($_POST['submit'])) {
        // print_r($_POST['email']);
        // print_r($_POST['password']);

        include_once('config.php');

        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios('email, password') VALUES ($email, $password)");

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>ProjetoLogin</title>
</head>
<body>
    <section id="container">
       
        <div class="logo">
            <h1 id="logo-tec">Teczidro</h1>
        </div>

        <div class="text">
            <h1 id="text-tec">Your webpage more securely</h1>
            <p>Technology that changes the world</p>
        </div>

    

     <div id="menu">   
        <ul class="nav-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </div>

    <div class="form">
        <form action="index.php" method="POST">
            <h1 class="form-title">Welcome</h1>

            <input type="email" name="email" id="email" placeholder="E-mail">
            <input type="password" name="password" id="password" placeholder="Password">

            <button type="submit" name="submit" id="btn" onclick="Btn.open()">Sign in</button>
            <p class="text-form">
                or sign with
            </p>

            <!-- <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a> -->

            <a href="#" id="forgot">Forgot your password?</a>

            <div id="login">
                <h1>Login success</h1>
                <div class="load"></div>
            </div>
        </form>
    </div>

</section>

    

<script src="script.js"></script>
</body>
</html>