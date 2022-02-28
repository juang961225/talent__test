<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <title>create Account</title>
</head>

<body>
  <div class="login">
    <h1 class="login__title">Create Account</h1>
    <!-- record field validation messages section -->
    <ul class="login__list">
      <!-- this php element performs the validation of the record fields, and renders the validation messages. -->
      <?php
      require "controllers/UserValidation.php";
      if (isset($_POST['userName']) || isset($_POST['phone']) || isset($_POST['email']) || isset($_POST['password'])) {
        $userValidation = new UserValidation($_POST["userName"], $_POST["phone"], $_POST["email"], $_POST["password"]);
        foreach ($userValidation->fields as $value) {
          echo "<li class='validation__wrapper'><p class='validation__text'>$value</p></li>";
        }
      }
      ?>
    </ul>
    <!-- registration form -->
    <form action="" method="POST" class="login__form">
      <!-- this field renders the fields of the registration record -->
      <?php
      require "tools/FieldsCreator.php";
      $fieldsCreator = new  FieldsCreator();

      $user = $fieldsCreator->inputCreator("userName", "text", "Username", "login__wrapper", "login");
      echo $user;
      $phone =  $fieldsCreator->inputCreator("phone", "number", "Phone", "login__wrapper", "login");
      echo $phone;
      $email =  $fieldsCreator->inputCreator("email", "email", "Email", "login__wrapper", "login");
      echo $email;
      $password = $fieldsCreator->inputPassword("password", "Password", "Password", "login__wrapper", 'login');
      echo $password;
      ?>
      <input class="login__button" type="submit" value="Send">

    </form>
    <span class="login__text">or <a class="login__text" href="./login">Login</a></span>
  </div>
</body>

</html>