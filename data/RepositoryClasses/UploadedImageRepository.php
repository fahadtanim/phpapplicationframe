<?php
require_once(DATA_PATH . 'db.php');
class UploadedImageRepository
{
    private $DB;
    function __construct()
    {
        $this->DB = DBConnect::get_DB_connect(DB_SERVER_NAME, DB_USER_NAME, DB_PASSWORD, DB_DATABASE_NAME);
    }

    function insert_image($img)
    {
        $image = array(
            "image_id" => "",
            "image_url" => $img
        );
        $result =  $this->DB->insert('uploaded_image', $image);
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
