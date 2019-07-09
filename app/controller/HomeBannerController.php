<?php
require_once(REPOSITORY_PATH . 'HomeBannerRepository.php');
require_once(APPLICATION_SERVICES_PATH . 'HomeBannerService.php');

class HomeBannerController
{
    public $service;
    function __construct()
    {
        $this->service = new HomeBannerService(new HomeBannerRepository());
    }

    function get_home_banners()
    {
        echo $this->service->getHomeBanners();
    }
}
