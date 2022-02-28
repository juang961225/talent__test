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
    <!-- login form -->
    <form method="post" class="login__form">
      <!-- causes each of the form fields to be displayed in html -->
      <?php
      require "tools/FieldsCreator.php";
      $fieldsCreator = new  FieldsCreator();
      $user = $fieldsCreator->inputCreator("userName", "text", "Username", "login__wrapper", "login");
      echo $user;
      $password = $fieldsCreator->inputPassword("password", "Password", "Password", "login__wrapper", 'login');
      echo $password;
      ?>
      <!-- form button -->
      <input class="login__button" type="submit" value="Log in">
    </form>
    <span class="login__text"> or <a class="login__text" href="./register">SingnUp</a></span>
  </div>
</body>

</html>