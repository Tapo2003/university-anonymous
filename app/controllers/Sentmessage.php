<?php
    
    class Sentmessage extends Controller{
        
        public function index(){
            $data = [];
            $model = new User;
            $key = '';
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                foreach ($_POST as $key => $value) {
                    
                }
                if(empty($model->deleteRecord($key))){
                    $data['empty'] = 'empty';
                }else{
                    echo 5;
                    // exit;
                }
                
            }
           
           if(isset($_SESSION['USER']) && !empty($_SESSION['USER'])){
                
           }else{
               redirect('login');
             
           }
          
           $userName = $_SESSION['USER']->username;
           
           $record['message_receiver'] = $userName;
        
           $returnData = $model->selectRecord($record);
           
            if(is_array($returnData)){
                $data = $returnData;
                
            }
            // print_r($data);
            // exit;
            $this->view('Sentmessage',$data);
        }
        

       
    }   

     