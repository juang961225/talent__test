<?php
require "./controllers/BasicController.php";

/**
 * class of routes and views of the project
 * */
class Router
{
  private BasicController $BasicController;

    /**
     * instance the php object
     * Router constructor.
     */
    public function __construct()
  {
    $this->BasicController = new BasicController();
  }

    /**
     * renders the views according to the fields that are typed in the url
     * @param array $url url taken from the server
     */
    public function urlGet($url)
  {
    $currentUrl = preg_replace('/:([^\/]+)/', '(?<\1>[^/]+)', $url);
    $currentUrl = explode("/", $currentUrl);
    $this->assignView($currentUrl);
  }

    /**
     *the assignView method renders the views according to what is passed to the url and by default it renders login
     * @param array $valueUrl variable of type array that has each of the elements of the url
     * @return Exception
     */
    private function assignView($valueUrl)
  {
    try {
      switch ($valueUrl[0]) {
        case "home":
          $this->BasicController->homeView();
          break;
        case "login":
          $this->BasicController->loginView();
          break;
        case "register":
          $this->BasicController->registerView();
          break;
        default:
          $this->BasicController->loginView();
          break;
      }
    } catch (Exception $ex) {
      return $ex;
    }
  }
}
