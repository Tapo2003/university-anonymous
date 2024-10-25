<?php

    class Sendmessage extends Controller{
       
        public function index(){
            
            $data = [];
            $user = new User;
            
            $url    =  $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
            $url    = explode("=", $url);
            $url    = end($url);
            
            
            $_POST['message_receiver'] = $url;

            $data['username'] = $url;
            $result = $user->first($data);
            
            if(is_object($result) && !empty($result)){
                $fetchUsername = $result->username;
                
                
            }else{
                $fetchUsername  = '';
            }

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if($user->validateImageFile($_POST)){
                    $PictureHiddenTag = 'T';
                    if($user->validateImageFile($_POST) == 9){
                        $PictureHiddenTag = 'F';
                    }
                    $data = $user->image;
                    foreach ($data as $key => $value){}
                    if($value == ''){
                        $value =  'empty';
                    }
                    $_POST['image_status']      = $PictureHiddenTag;
                    $_POST['image_name']        = $value;
                    $_POST['message_receiver']  = $url;
                    
                    // if($user->InsertImage($_POST) == ''){
                    //     echo "<script>alert('message sent')</script>";
                        
                    // }
                    
                   
                }
               
                
            }
            
            $data['username'] = $url;
            $data['fetchUsername']  = $fetchUsername;
            $data['errors'] = $user->errors;
            
            
            $this->view('sendmessage',$data);
        }

       
    }   

     