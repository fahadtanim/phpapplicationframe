<?php
    class HomeController{
        private $view;
        function __construct( $view ){
            $this->view = $view;
            //echo "constructor called";
        }

        function index(){
            // echo "index Called of Login Controller";
            return $this->view->index();
        }
        function edit( $id = '', $num = '' ){
            echo "parameter 1: ".$id." parameter 2: ". $num;
        }
    }
?>