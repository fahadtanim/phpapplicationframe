<?php
    class HomeControllerView{
        function __construct(){}
        
        function index(){
            if(file_exists(VIEWHTML_PATH.'HomeIndexView.php') )
                require_once(VIEWHTML_PATH.'HomeIndexView.php');
        }
    }
?>