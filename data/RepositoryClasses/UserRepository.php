<?php
require_once(ENTITY_MODEL_PATH . 'User.php');
require_once(DATA_PATH . 'db.php');
class UserRepository
{
    private $DB;
    function __construct()
    {
        $this->DB = DBConnect::get_DB_connect(DB_SERVER_NAME, DB_USER_NAME, DB_PASSWORD, DB_DATABASE_NAME);
    }
    public function getAllUsers()
    {
        $result = $this->DB->getTableDataObj('user');
        // $data = array();
        if ($result) {
            return $data = array(
                "data" => $this->DB->getTableDataObj('user'),
                "success" => true,
                "message" => ""
            );
        } else {
            return $data = array(
                "data" => "",
                "success" => false,
                "message" => ""
            );
        }
    }

    public function getUserById($id)
    {
        // $cond = 'user_id = "'.$id.'"';
        $cond = 'user_id=' . $id;
        $result = $this->DB->getTableDataObj('user', $cond);
        // var_dump($result);
        // $data = array();
        if ($result) {
            return $data = array(
                "data" => $result,
                "success" => true,
                "message" => ""
            );
        } else {
            return $data = array(
                "data" => "",
                "success" => false,
                "message" => ""
            );
        }
    }

    public function getUserByEmail($email)
    {
        // $cond = 'user_id = "'.$id.'"';
        $cond = 'email=' . $email;
        $result = $this->DB->getTableDataObj('user', $cond);
        // $data = array();
        if ($result) {
            return $data = array(
                "data" => $result,
                "success" => true,
                "message" => ""
            );
        } else {
            return $data = array(
                "data" => "",
                "success" => false,
                "message" => ""
            );
        }
    }

    public function userExist($email)
    {
        // $cond = 'user_id = "'.$id.'"';
        $cond = 'email=' . $email;
        $result = $this->DB->getTableDataObj('user', $cond);
        // $data = array();
        if ($result) {
            return $data = array(
                "success" => true,
                "message" => "User Already Exist"
            );
        } else {
            return $data = array(
                "success" => false,
                "message" => "User Don't exist"
            );
        }
    }

    public function createUser($user)
    {
        $result = $this->DB->insert('user', $user);
        if ($result) {
            return $data = array(
                "data" => "",
                "success" => true,
                "message" => "Created New User Successfully"
            );
        } else {
            return $data = array(
                "data" => "",
                "success" => false,
                "message" => "Couldn't Create New User"
            );
        }
    }
}
