
<?php
    
    class Login extends Controller{
        
        public function index(){
            $data = [];
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $user = new User;
            
                if($user->SignIn($_POST)){
                    $arr['email'] = $_POST['email']; 
                    $row = $user->first($arr);
                    if($row){
                        if($row-> password === $_POST['password']){
                            $_SESSION['USER'] = $row;
                            // redirect('home',$data);
                            redirect('profilepage');
                        }else{
                            $user->errors = "Password is not correct";
                        }
                    }else{
                        $user->errors = "Record does not exist";
                    }
                }
                
                // $user->errors['email'] = 'wrong password or email';

                $data['errors'] = $user->errors;
               
            }
            $this->view('login',$data);
        }

       
    }   

     