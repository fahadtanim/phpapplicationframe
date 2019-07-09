<?php
require_once(DATA_PATH . 'db.php');
class HomeBannerRepository
{
    private $DB;
    function __construct()
    {
        $this->DB = DBConnect::get_DB_connect(DB_SERVER_NAME, DB_USER_NAME, DB_PASSWORD, DB_DATABASE_NAME);
    }

    function getAllHomeBanners()
    {
        $result = $this->DB->getTableDataObj('home_banner');
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

    function insert_banner($img)
    {
        $image = array(
            "home_banner_id" => "",
            "banner_image" => $img
        );
        $result =  $this->DB->insert('home_banner', $image);
        if ($result) {
            return $data = array(
                "success" => true
            );
        } else {
            return $data = array(
                "success" => false
            );
        }
    }
}
