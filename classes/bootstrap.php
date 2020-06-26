<?php

    class Bootstrap{
        private $controller;
        private $action;
        private $request;

        public function __construct($request){
            $this->request = $request;

            if($this->request['controller'] == ""){
                $this->controller = 'home';
            }else{
                $this->controller = $this->request['controller'];
            }
            if($this->request['action'] == ""){
                $this->action = 'index';
            }else{
                $this->action = $this->request['action'];
            }

           // echo $this->controller;

        }

        public function createController(){
            // Check Class
            if(class_exists($this->controller)){
                $parents = class_parents($this->controller);
            // Check Extend 
            if(in_array("controller", $parents)){
                if(method_exists($this->controller, $this->action)){
                    return new $this->controller($this->action, $this->request);
                }else{
                    // Method Does not exist !
                    echo '<h1> Method does not exist </h1>';
                    return;
                }
            }else{
                // Base Controller does not exist!
                echo '<h1> Base Controller does not exist </h1>';
                return;
            }
            }else{
                // Controller Class does not exist!
                 echo '<h1> Controller Class does not exist </h1>';
                 return;
            }
        }
    }
?>