<?php

require './controllers/UserController.php';
class BasicController
{
    /**
     *render the home view
     */
    function homeView ()
    {
        try {

            require "./views/home.php";
        }catch (Exception $ex)
        {
            echo $ex;
        }
    }

    /**
     *render the log in view
     */
    function loginView ()
    {
        try {


            $userController = new UserController();
            if(isset($_POST['userName']) && isset($_POST['password'])){
                $userController->getUser($_POST['userName'],$_POST['password']);
            }

            require "./views/login.php";
        }catch (Exception $ex)
        {
            echo $ex;
        }
    }

    /**
     *render the home view
     */
    function registerView ()
    {
        try {

            if(isset($_POST['userName'])|| isset($_POST['phone']) || isset($_POST['email']) ||isset($_POST['password'])) {
                $userController = new UserController();
                $array = array("name"=>$_POST['userName'], "phone"=>$_POST['phone'], "email"=>$_POST['email'],"password"=>$_POST['password']);
                $userController->saveUser($array);
            }

            require "./views/register.php";
        }catch (Exception $ex)
        {
            echo $ex;
        }
    }
}