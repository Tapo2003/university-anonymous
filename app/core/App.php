<?php
    class App{

        private $controller = "Home";
        private $method = "index";
        private function  splitUrl(){
            // $URL = $_GET['url'] ?? 'home';
            $URL = $_GET['url'];
            
            if(!$_GET['url']){
                $URL = 'home';
            }
            
            $URL = explode("/",trim($URL,"/"));
            return $URL;
            
        }
        
        public function loadController(){
            $URL = $this->splitUrl();
            ///select controller
            $filename =  "../app/controllers/" .ucfirst($URL[0]).".php"; 
            
            if(file_exists($filename)){ 
                require $filename;
                $this->controller = ucfirst($URL[0]);
                unset($URL[0]);
                
            }else{  
                $filename =  "../app/controllers/_404.php"; 
                require $filename;
                $this->controller = "_404";
            
            }
           
            $controller = new $this->controller;
            //SELECT METHOD
            if(!empty($URL[1])){
               
                if(method_exists($controller,$URL[1])){
                    $this->method = $URL[1];
                    unset($URL[1]);

                }
            }
            

        
            call_user_func_array([$controller, $this->method],$URL); 
        }  
        
    }

   