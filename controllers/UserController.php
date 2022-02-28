<?php
require 'tools/CommitsCreator.php';
require './models/Data.php';
class UserController
{
    private Data $data;

    /**
     * this method takes the values from the form and saves them in json
     * @param array $user registration form fields
     */
    public function saveUser($user){
        $this->data = new Data();
        return $this->data->saveData($user);
    }

    /**
     * @param string $user logon username
     * @param string $password login password
     */
    public function getUser($user, $password){
        $this->data = new Data();
        $data = $this->data->getData();
        foreach ($data as $value){
            if ($value["name"] == $user && $value["password"] == $password){
                header("Location: http://localhost/talent_test/home", TRUE, 301);
                exit();

            }else{
                echo "incorrect user";
            }
        }
    }

    /**
     * this method calls saveCommit to save the data to the json
     * @param array $commit
     */
    public function saveCommit($commit){
        $this->data = new Data();
        return $this->data->saveCommit($commit);
    }

    /**
     *this method takes the comments, organizes them and paints them.
     */
    public function getCommit(){
        $CommitsCreator = new CommitsCreator();
        $this->data = new Data();
        $data = $this->data->getCommits();
        foreach ($data as $value){
            $item = $CommitsCreator->addCommit($value["date"],$value["commit"]);
            echo $item;
        }

    }
}