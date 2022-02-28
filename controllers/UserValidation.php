<?php
class UserValidation
{
    public $userName = "";
    public $phone = "";
    public $email = "";
    public $password = "";
    public $fields = array();


    /**
     * assigns variables and calls validation methods
     * UserValidation constructor.
     * @param string $user
     * @param string $cel
     * @param string $adress
     * @param $pass
     */
    public function __construct($user, $cel="", $adress="", $pass)
    {
        $this->userName = $user;
        $this->phone = $cel;
        $this->email = $adress;
        $this->password = $pass;

        $this->userNameValidation();
        $this->phoneValidation();
        $this->emailValidation();
        $this->passwordValidation();

        return $this->fields;
    }

    /**
     *performs the validations of the password field
     */
    private function passwordValidation ()
    {
        if (isset($_POST["password"]))
        {
            $this->password = $_POST["password"];
        }

        if(preg_match("/^(?=\w*[A-Z])(?=\w*-)(?=\w*[a-z])\S{6,18}$/", $this->password) === 0)
        {
            $this->printFields("This password should contain at least 6 characters long and contain a “-” and an uppercase letter");
        }

    }

    /**
     *performs the validations of the email field
     */
    private function emailValidation ()
    {

        if (isset($_POST["email"]))
        {
            $this->email = $_POST["email"];
        }

        if(preg_match("/^$/", $this->email) === 1)
        {
            $this->printFields("the email field cannot be empty");
        }

        if(preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $this->email) === 0)
        {
            $this->printFields("you must enter a valid email address");
        }
    }

    /**
     *performs the validations of the telephone field
     */
    private function phoneValidation()
    {
        if(isset($_POST["phone"]))
        {
            $this->phone = $_POST["phone"];
        }

        if(preg_match("/^$/", $this->phone) === 1)
        {
            $this->printFields("the phone field cannot be empty");
        }

        if(preg_match("/[0-9]{10,10}/", $this->phone) === 0 || strlen($this->phone)!= 10)
        {
            $this->printFields("phone should be only 10 numbers");
        }

    }

    /**
     *performs username validations
     */
    private function userNameValidation()
    {
        if(preg_match("/^$/", $this->userName) === 1)
        {
            $this->printFields("the username field cannot be empty");
        }

        if(preg_match("/[0-9]{2,20}/",$this->userName) === 0)
        {
            $this->printFields("username field must have at least 2 numbers");
        }

        if(preg_match("/[a-z]{4,20}/i", $this->userName) === 0)
        {
            $this->printFields("the username must have at least 4 letters");
        }

        if(preg_match("/[^a-zA-Z\d]/", $this->userName) === 1)
        {
            $this->printFields("the username must not contain special characters");
        }
    }

    /**
     * add validation messages to the array fields
     * @param string $content validation messages
     */
    private function printFields ($content)
    {
        array_push($this->fields, $content);
    }

}


