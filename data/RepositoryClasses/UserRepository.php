<?php
    require_once(ENTITY_MODEL_PATH.'User.php');
    require_once(DATA_PATH.'db.php');
    class UserRepository{
        private $DB;
        function __construct(){
            $this->DB = DBConnect::get_DB_connect(DB_SERVER_NAME,DB_USER_NAME,DB_PASSWORD,DB_DATABASE_NAME);
        }
        public function getAllUsers(){
            return $this->DB->getTableDataObj('user');
        }

    }
?>