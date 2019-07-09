<?php
class HomeAboutService
{
    public $HomeAboutRepo;

    public function __construct($HomeAboutRepo)
    {
        $this->HomeAboutRepo = $HomeAboutRepo;
    }

    public function getHomeAbout()
    {
        $data = $this->HomeAboutRepo->getHomeAbout();
        $data['data']->home_about_id = $data['data']->home_about_id;
        $data['data']->welcome = urldecode($data['data']->welcome);
        $data['data']->name = urldecode($data['data']->home_about_id);
        $data['data']->designation = urldecode($data['data']->designation);
        $data['data']->description = urldecode($data['data']->description);
        $data['data']->equipment = urldecode($data['data']->equipment);
        $data['data']->photo_session = urldecode($data['data']->photo_session);
        $data['data']->studio_session = urldecode($data['data']->studio_session);
        $data['data']->happy_clients = urldecode($data['data']->happy_clients);
        return json_encode($data);
    }

    public function update_home_about()
    {

        $data = array(
            "welcome" => urlencode($_POST['welcome']),
            "title" => urlencode($_POST['title']),
            "name" => urlencode($_POST['name']),
            "designation" => urlencode($_POST['designation']),
            "description" => urlencode($_POST['description']),
            "equipment" => urlencode($_POST['equipment']),
            "photo_session" => urlencode($_POST['photo_session']),
            "studio_session" => urlencode($_POST['studio_session']),
            "happy_clients" => urlencode($_POST['happy_clients']),
        );
        // var_dump($_POST);
        return json_encode($this->HomeAboutRepo->updateHomeAbout($data));
    }
}
