<?php
    define('ROOT', dirname(__FILE__));
    define('APPLICATION_CONFIG', ROOT."/application_config/");
    require_once(APPLICATION_CONFIG."path_config.php");
    require_once(APPLICATION_CONFIG."app_start.php");
    

    app_start();
?>