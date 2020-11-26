<?php
    class User{
        public $name;
        public $username;
        public $email;

        function __construct($name, $username , $email){
            $this->name = $name;
            $this->username = $username;
            $this->email = $email;
        } 
        function addFriend(){
            echo "{$this->name} .Added a friend<br>";
        }
        function postStatus(){
            echo "{$this->name} .Posted a status<br>";
        }
    }

    $kyle=new User ("Kyle Leigh Espeña", "Zayn Yap", "jasyle92@gmail.com");
    $kyle->addFriend();
    $kyle->postStatus();
?> 
