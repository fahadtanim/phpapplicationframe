<?php
    require_once(REPOSITORY_PATH.'UserRepository.php');
    require_once(APPLICATION_SERVICES_PATH.'UserService.php');
    class UserController{
        public $service;
        function __construct(){
            $this->service = new UserService(new UserRepository());
        }

        function get_users(){
            // var_dump($this->UserRepo);
            // echo "came";
            // echo "called get_users\n";
            echo $this->service->getUsersService();
        }

        function get_user_by_id($id){
            // echo "called get_user_by_id\n";
            echo $this->service->getUserById($id);
        }

        function get_user_by_email($email){
            // echo "called get_user_by_email\n";
            echo $this->service->getUserByemail($email);
        }

        function post_user(){
            
            echo  $this->service->postUserService();
        }
    }
?>