<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="http://localhost/talent_test/assets/css/home.css">
  <title>Home</title>
</head>

<body>
  <div class="home">
    <h1 class="home__title">Massage Posting View</h1>
    <!-- search fields by word and by date -->
    <form class="home__form" action="">
      <div class="home__search">
        <input class="home__input home__input--search" type="search" name="search" placeholder="  search">
        <button class="home__icon" type="submit"><i class="fas fa-search"></i>
        </button>
      </div>
      <input class="home__input home__input--date" type="date" name="date" placeholder="  YYYY.MM.DD">
    </form>
    <!-- message section -->
    <section>
      <ul class="home__wrapper">
        <!-- this php code takes the written message, validates that it is not an empty field and renders the written message and those that were written. -->
        <?php
        if (isset($_POST["comment"])) {
          $userController = new UserController();
          $date = date("m d Y", time());
          $array = array("date" => $date, "commit" => $_POST["comment"]);
          $userController->saveCommit($array);
          $userController->getCommit();
        }
        ?>
      </ul>
      <!-- form to upload messages -->
      <form class="home__form home__form--comment" action="" method="post">
        <input class=" home__comment" type="text" name="comment" placeholder="  Write a comment ...">
        <input class="home__button" type="submit" value="submit">
      </form>
    </section>
  </div>
</body>

</html>