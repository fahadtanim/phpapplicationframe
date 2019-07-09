<?php
    class HomeBannerService{
        public $HomeBannerRepo;

        public function __construct( $HomeBannerRepo ){
            $this->HomeBannerRepo = $HomeBannerRepo;
        }

        public function getHomeBanners(){
            return json_encode($this->HomeBannerRepo->getAllHomeBanners());
        }
    }
?>