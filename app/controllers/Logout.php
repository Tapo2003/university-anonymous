<?php
     class Logout extends Controller{
        
        public function index(){
            // $model = new User;
           //if empty set it to use and if it is not empty set it to user
        //    $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;
        //    $this->view('Logout',$data);
            if(!empty($_SESSION['USER'])){
                
                unset($_SESSION['USER']);
                redirect('login');
            }else{
                redirect('login');
            }
        }

       
    }   