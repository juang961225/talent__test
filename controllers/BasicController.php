<?php


class BasicController
{
    function homeView ()
    {
        try {
            require "./views/home.php";
        }catch (Exception $ex)
        {
            echo $ex;
        }
    }

    function loginView ()
    {
        try {
            require "./views/login.php";
        }catch (Exception $ex)
        {
            echo $ex;
        }
    }

    function registerView ()
    {
        try {
            require "./views/register.php";
        }catch (Exception $ex)
        {
            echo $ex;
        }
    }
}