<?php
require "./tools/Router.php";
$url = empty($_GET["url"])?"login":$_GET["url"];
$app = new Router();
$app->urlGet($url);
?>