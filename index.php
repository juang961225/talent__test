<?php
require "./tools/Router.php";
// take the url and verify
$url = empty($_GET["url"])?"login":$_GET["url"];
// ruter class instance and calls urlGet method
$app = new Router();
$app->urlGet($url);
?>