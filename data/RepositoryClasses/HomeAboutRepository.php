<?php
require_once(DATA_PATH . 'db.php');
class HomeAboutRepository
{
    private $DB;
    function __construct()
    {
        $this->DB = DBConnect::get_DB_connect(DB_SERVER_NAME, DB_USER_NAME, DB_PASSWORD, DB_DATABASE_NAME);
    }

    function getHomeAbout()
    {
        $cond = 'home_about_id=1';
        $result = $this->DB->getTableDataObj('home_about', $cond);
        // $data = array();
        // var_dump($result);
        if ($result) {
            $data = array(
                "data" => $result[0],
                "success" => true,
                "message" => ""
            );
            // var_dump($data);
            return $data;
        } else {
            $data = array(
                "data" => "",
                "success" => false,
                "message" => ""
            );
            // var_dump($data);
            return $data;
        }
    }

    function updateHomeAbout($data)
    {
        $cond = 'home_about_id = 1';
        $result = $this->DB->updateTable('home_about', $data, $cond);
        // var_dump($result);
        if ($result) {
            $data = array(
                "success" => true,
                "message" => "successfully updated"
            );
            // var_dump($data);
            return $data;
        } else {
            $data = array(
                "success" => false,
                "message" => "unsuccessfull"
            );
            // var_dump($data);
            return $data;
        }
    }
}
