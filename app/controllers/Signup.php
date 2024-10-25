<?php
    
    
    class Signup extends Controller{
       
        public function index(){
            
            $data = [];
            $user = new User;
            
           
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                
                if($user->SignUpvalidate($_POST)){
                    $userInput['email'] = $_POST['email'];
                    $userInput['username'] = $_POST['username'];
                    
                    $data = $user->where($userInput);
                   
                    if(is_array($data)){
                        $user->errors = "Record exist already with that username or email";
                    }else{
                        $user->insert($_POST);
                        redirect('login');
                    }
                }
                $data['errors'] = $user->errors;
            
            }
            
        
           
            $this->view('Signup',$data);
        }

       
    }   

     