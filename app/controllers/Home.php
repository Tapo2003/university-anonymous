
<?php
    
    class Home extends Controller{
        
        public function index(){
            // $model = new User;
           //if empty set it to use and if it is not empty set it to user
           $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;
           $this->view('home',$data);
        }

       
    }   

     