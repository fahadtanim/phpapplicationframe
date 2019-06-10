<?php
    function authenticationMiddleware(){
        if($_SESSION["user_id"] == null){
            return true;
        }
        else{
            return false;
        }
    }
?>