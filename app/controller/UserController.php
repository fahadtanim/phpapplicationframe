<?php
    require_once(REPOSITORY_PATH.'UserRepository.php');
    class UserController{
        public $UserRepo;
        function __construct(){
            $this->UserRepo = new UserRepository();
        }

        function get_users(){
            // var_dump($this->UserRepo);
            echo json_encode($this->UserRepo->getAllUsers());
        }
    }
?>