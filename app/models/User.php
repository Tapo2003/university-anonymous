<?php
    
    class User 
    {
    
        use Model;
        protected $table = 'user';
        protected $allowedColumn = [

            'email',
            'username',
            'password',
    
        ];

        protected $userMessage = [
            'user_message',
            'image_status',
            'message_receiver',
            'image_name',
        ];

        public function SignUpvalidate($data){
            
            $this->errors = [];
            
            if($data['email'] == '' || $data['username'] == '' || $data['password'] == ''){
                $this->errors['allFields'] = 'Please input all fields';
            }else if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
                $this->errors['email'] = "Email is not valid";
            }else if(strlen($data['password']) < 4){
                $this->errors['email'] = "password muct be greater than 4";
            }
            
            if(empty($this-> errors)){
                return true;
            }
            
            return false;
        }

        public function SignIn($data){
            $this->errors = [];
            
            if($data['email'] == '' || $data['password'] == ''){
                $this->errors['allFields'] = 'Please input all fields';
            }
            
            
            if(empty($this-> errors)){
                return true;
            }
            
            return false;
        }

        public function validateImageFile($data){
            $this->errors = [];
            
            $message_receiver = $data['message_receiver'];
            if($data['user_message'] == ''){
                $this->errors['email'] = "Please input all fields";
            }
            
            if($_FILES['file']['size'] == 0 || $_FILES['file']['name'] == '' || $_FILES['file']['type'] == '' || $_FILES['file']['error'] > 0){
                $this->image['user_image'] = '';
                return 9;
            }else{
                $file = $_FILES['file'];
                $fileName = $_FILES['file']['name'];
                $fileTmpName = $_FILES['file']['tmp_name'];
                $fileSize = $_FILES['file']['size'];
                $fileError = $_FILES['file']['error'];
                $fileType = $_FILES['file']['type'];
                $fileExt = explode('.',$fileName);

                $fileActualExt = strtolower(end($fileExt));
                
                $allowed = array('jpg','jpeg','png','pdf');

                if(in_array($fileActualExt, $allowed)){
                    if($fileError === 0){
                        if($fileSize < 10000000){
                            $upload_dir = 'assets/secret_image';
                            if(is_dir($upload_dir)){
                                //Directory already exist
                            }else{//create the directory
                                mkdir($upload_dir);
                            }

                            $fileNameNew = uniqid();
                            $fileNameNew = $message_receiver.'-'.$fileNameNew;
                            
                            $targetFile  = $upload_dir.'/'.$fileNameNew.'.jpg';

                            
                            // print_r($image);
                            // exit;
                            if(file_exists($targetFile))
                            {
                                unlink($targetFile);//unlink php function deletes the file
                            }

                            if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFile))//uploads the file in the directory
                            {
                                $this->image['user_image'] = $fileNameNew;
                                // return true;
                                return true;
                                
                                
                            }else{
                            
                                    
                            }
                            
                           
                        }else{
                            echo "<script>alert('Your file is to big')</script>";
                            
                            // $this->errors['file is too big'] = "Your file is to big";
                        }
                    }else{

                        echo "<script>alert('There was an error uploading your file')</script>";
                        
                        // $this->errors['error upload'] = "There was an error uploading your file";
                    }
                }else{
                    echo "<script>alert('You can not upload files of this type')</script>";
                    // $this->errors['error upload'] = "You can not upload files of this type";
                }
            
            
            }
            
            
        }

    }

    
    