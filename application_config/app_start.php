<?php
    require_once(APPLICATION_CONFIG."router_config.php");
    require_once(APPLICATION_CONFIG."path_config.php");

    /* ROUTE -> map() format: */
    /*
    * $route->map($route_url, $method, $middleware, $controller, $action);
    * $route_url: something/something/[:variable_name] => here constant url have to be written directly
    * and variable have to be written as [:variable_name]
    * $method: all the existing methods such as get,put,post,delete. If for all method write '*'.
    * $middleware: its an array of middleware class name and method . It can be null
    * $controller: which is name of controller class. the controller class name should be same as file name and have to be in this format: such as TaskController.php
    */

    function app_start(){
        session_start();
        $route = new Router();
        $route->map('login','get','Login');
        $route->map('home','get','Home');
        $route->map('api/upload','post','Upload','upload_photo');
       // $route->map('','Task');
        $route->map('api/tasks/[:id]/[:num]','get','Task','edit');
        //$route->map('api/task','Task');
        $route->map('**','*','Error');
        $route->route_start();
    }
?>