<?php
    class Router {
        private $url;
        private $url_array;
        private $urlLen;
        private $route_map;
        function __construct(){
            $this->url = ( isset( $_GET['url'] ) ) ? $_GET['url'] : "index";
            $this->url = rtrim( $this->url, "/" );
            $this->url_array = explode( '/', $this->url );
            $this->urlLen = count($this->url_array);
            //print_r($this->url_array);
        }

        public function map($routeUrl, $controller_name, $action_name=''){
            if($routeUrl == '**'){
                $this->route_map[$routeUrl] = array(
                    'controller' => $controller_name,
                    'action' => $action_name
                );
            }
            elseif (empty($routeUrl)) {
                $routeUrl = 'index';
                $this->route_map[$routeUrl] = array(
                    'controller' => $controller_name,
                    'action' => $action_name
                );
            }
            else{
                $pattern = '/\[:(\w+\d*)\]/';
                $reg = preg_replace($pattern,'(.+)',$routeUrl);
    
                $reg = '/^'.preg_replace('/\//', '\/', $reg).'$/';
    
                $this->route_map[$reg] = array(
                    'controller' => $controller_name,
                    'action' => $action_name
                );
            }
            
        }

        public function route_start(){
            echo "URL: ".$this->url."<br>";
            $controller_found = false;
            if ($this->url == 'index') {
                $controller_name = $this->route_map['index']['controller'].'Controller';
                $action = $this->route_map['index']['action'];
                if( file_exists(CONTROLLER_PATH.$controller_name.'.php') ){
                    require_once(CONTROLLER_PATH.$controller_name.'.php');
                    if( class_exists($controller_name) ){
                        $controller = new $controller_name();
                        if(empty($action)){
                            $action = 'index';
                            $controller->$action();
                        }
                        elseif(method_exists($controller, $action)){
                            $controller->$action();
                        }
                        else{
                            echo "action couldn't be found";
                        }
                    }
                }
                $controller_found = true;
            }
            else {
                foreach( $this->route_map as $route_key => $route_values ){
                    if ($route_key == 'index') {
                        continue;
                    }
                    elseif(preg_match($route_key, $this->url)){
                        preg_match($route_key, $this->url, $params);
                        unset($params[0]);
                        $params = array_values($params);
                        $controller_name = $route_values['controller'].'Controller';
                        $action = $route_values['action'];
                        if( file_exists(CONTROLLER_PATH.$controller_name.'.php') ){
                            require_once(CONTROLLER_PATH.$controller_name.'.php');
                            if( class_exists($controller_name) ){
                                $controller = new $controller_name();
                                if(empty($action)){
                                    $action = 'index';
                                    $controller->$action();
                                }
                                elseif(method_exists($controller, $action)){
                                    if(count($params) > 0){
                                        call_user_func_array(array($controller, $action), $params);
                                    }
                                    else{
                                        $controller->$action();
                                    }
                                }
                                else{
                                    echo "action couldn't be found";
                                }
                            }
                        }
                        $controller_found = true;
                        break;
                    }
                }
            }
            

            if($controller_found == false){
                $controller_name = $this->route_map['**']['controller'].'Controller';
                $action = $this->route_map['**']['action'];
                if( file_exists(CONTROLLER_PATH.$controller_name.'.php') ){
                    require_once(CONTROLLER_PATH.$controller_name.'.php');
                    if( class_exists($controller_name) ){
                        $controller = new $controller_name();
                        if(empty($action)){
                            $action = 'index';
                            $controller->$action();
                        }
                        elseif(method_exists($controller, $action)){
                            if(count($params) > 0){
                                call_user_func_array(array($controller, $action), $params);
                            }
                            else{
                                $controller->$action();
                            }
                        }
                        else{
                            echo "action couldn't be found";
                        }
                    }
                }
            }
        }
    }
?>