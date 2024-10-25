

<?php
    
    class Profilepage extends Controller{
        
        public function index(){
            $data = []; 
            if(isset($_SESSION['USER']) && !empty($_SESSION['USER'])){
                
            }else{
                redirect('login');
              
            }
            // print_r($_SESSION['USER']);
            $this->view('Profilepage',$data);
        }
    } 

     