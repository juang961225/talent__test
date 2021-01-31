<?php

require "./controllers/formValidation.php";
$x = new RegisterValidation($_POST["userName"], $_POST["phone"], $_POST["email"], $_POST["password"]);
    print_r($x);