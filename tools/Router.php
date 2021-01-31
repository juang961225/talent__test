<?php
require "./controllers/BasicController.php";
class Router
{
    private BasicController $BasicController;
    public function __construct()
    {
        $this->BasicController = new BasicController();
    }
   public function urlGet($url)
    {
        $currentUrl = preg_replace('/:([^\/]+)/','(?<\1>[^/]+)',$url);
        $currentUrl = explode("/",$currentUrl);
        $this->assignView($currentUrl);
    }

    private function assignView ($valueUrl)
    {
        try {
         switch ($valueUrl[0]){
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
        }catch (Exception $ex)
        {
            return $ex;
        }
    }
}