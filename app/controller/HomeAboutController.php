<?php
require_once(REPOSITORY_PATH . 'HomeAboutRepository.php');
require_once(APPLICATION_SERVICES_PATH . 'HomeAboutService.php');

class HomeAboutController
{
    public $service;
    function __construct()
    {
        $this->service = new HomeAboutService(new HomeAboutRepository());
    }

    function utf8ize($mixed)
    {
        if (is_array($mixed)) {
            foreach ($mixed as $key => $value) {
                $mixed[$key] = utf8ize($value);
            }
        } elseif (is_string($mixed)) {
            return mb_convert_encoding($mixed, "UTF-8", "UTF-8");
        }
        return $mixed;
    }

    function get_home_about()
    {
        header('Content-Type: application/json');
        echo $this->service->getHomeAbout();
    }

    function post_home_about_update()
    {
        header('Content-Type: application/json');
        // echo "called";
        echo $this->service->update_home_about();
    }
    function post_update_signature()
    { }
    function put_about_bg_image()
    { }
}
