<?php
    class LoginControllerView{
        function __construct(){}
        function index(){
            if(file_exists(VIEWHTML_PATH.'LoginIndexVIEW.php') )
                require_once(VIEWHTML_PATH.'LoginIndexVIEW.php');
        }
    }
?>