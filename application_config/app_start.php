<?php
    require_once(APPLICATION_CONFIG."router_config.php");
    require_once(APPLICATION_CONFIG."path_config.php");
    function app_start(){
        $route = new Router();
        $route->map('','Task');
        $route->map('api/tasks/[:id]/[:num]','Task','edit');
        $route->map('api/task','Task');
        $route->map('**','Error');
        $route->route_start();
    }
?>