<?php
    class ErrorController{
        
        function __construct(){
            //echo "constructor called";
        }

        function index(){
            echo "Error index called";
        }
        function edit( $id = '', $num = '' ){
            echo "parameter 1: ".$id." parameter 2: ". $num;
        }
    }
?>