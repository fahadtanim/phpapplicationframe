<?php

    class UserService{
        public $UserRepo;

        public function __construct( $UserRepo ){
            $this->UserRepo = $UserRepo;
        }

        public function getUsersService(){
            return json_encode($this->UserRepo->getAllUsers());
        }

        public function getUserById($id){
            return json_encode($this->UserRepo->getUserById($id));
        }

        public function getUserByEmail($email){
            return json_encode($this->UserRepo->getUserByEmail($email));
        }

        public function postUserService(){
            $user = array(
                "user_id" => "",
                "full_name" => $_POST["full_name"],
                "email" => $_POST["email"],
                "password" => $_POST["password"],
                "token" => "",
            );
            return json_encode($this->UserRepo->createUser($user));
        }

    }
?>