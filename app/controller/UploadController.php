<?php
require_once(REPOSITORY_PATH . 'UploadedImageRepository.php');
require_once(REPOSITORY_PATH . 'HomeBannerRepository.php');
require_once(APPLICATION_SERVICES_PATH . 'UploadService.php');
class UploadController
{
    public $service;
    function __construct()
    {
        $this->service = new UploadService(new UploadedImageRepository(), new HomeBannerRepository());
    }
    public function post_upload_home_banner_photo()
    {
        echo $this->service->upload_banner_photo();
    }
}
