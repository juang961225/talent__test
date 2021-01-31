<?php

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/talent_test/assets/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>log in</title>
</head>

<body>
    <div class="login">
        <h1 class="login__title">Log in</h1>

        <form action="login.php" method="post" class="login__form">

            <?php
            require "tools/renderLogin.php";
            ?>

            <div class="login__wrapper">
                <label class="login__label" for="password">Password</label>

                <div class="login__password">
                    <input class="login__input login__input--pass" type="password" name="password" placeholder="  password">
                    <button class="login__icon">
                        <i class="far fa-eye"></i>
                    </button>
                </div>
            </div>

            <input class="login__button" type="submit" value="Log in">
        </form>
        <span class="login__text"> or <a class="login__text" href="http://localhost/talent_test/register">SingnUp</a></span>
    </div>
</body>

</html>