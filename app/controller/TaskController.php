<?php
    class TaskController{
        
        function __construct(){
            //echo "constructor called";
        }

        function index(){
            echo "index called";
        }
        function edit( $id = '', $num = '' ){
            echo "parameter 1: ".$id." parameter 2: ". $num;
        }
    }
?>