<?php
require "controllers/fildsTags.php";
$user = new fildsCreater("userName","text","Username","login");
$phone = new fildsCreater("phone","number","Phone","login");
$email = new fildsCreater("email","email","Email","login");

