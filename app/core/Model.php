<?php
    Trait Model{
        use Database;
       
        protected $limit        = 10;
        protected $offset       = 0; 
        protected $order_type   = "desc";
        protected $order_column = "id"; 
        public    $errors       = [];
        // public    $image        = [];
        

        public function findAll(){
            $this->table = 'user';
            $query = " select * from $this->table order by $this->order_column $this->order_type limit $this->limit offset $this->offset";

            return $this->query($query);

        }

        public function where($data, $data_not = []){
            $this->table = 'user';
            // print_r($data);
            $keys = array_keys($data);
            
            $keys_not = array_keys($data_not);
            $query = "select * from $this->table where ";
            foreach($keys as $key){
            
                $query .= $key . " = :". $key. " || "; 
            }

            foreach($keys_not as $key){
                $query .= $key . "!= :". $key. " && "; 
            }
            $query = trim($query, " || ");
 
            $query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";

            
            $data = array_merge($data,$data_not);
            
            return $this->query($query,$data);

        }

        public function first($data, $data_not = []){
            $this->table = 'user';
            $keys = array_keys($data);
            
            $keys_not = array_keys($data_not);
            $query = "select * from $this->table where ";
            foreach($keys as $key){
            
                $query .= $key . " = :". $key. " && "; 
            }

            foreach($keys_not as $key){
                $query .= $key . "!= :". $key. " && "; 
            }
            $query = trim($query, " && ");
 
            $query .= " limit $this->limit offset $this->offset";

            
            $data = array_merge($data,$data_not);
            
           
            $result =  $this->query($query,$data);

             $result;
            if($result)
            return $result[0];
            return false;

            

        }

        public function insert($data){
            $this->table = 'user';
            if(!empty($this->allowedColumn)){
                
                foreach ($data as 
                $key => $value){
                    if(!in_array($key, $this->allowedColumn)){
                        unset($data[$key]);
                        
                    }
                    # code...
                }
            }
            $key = array_keys($data);
            
            $query = "insert into $this->table (".implode(",", $key).") values (:".implode(",:",$key).")";
            
            $this->query($query,$data);
            return false;



        }


        public function update($data,$id,$id_column = 'id')
        {   
            $this->table = 'user';
             ///if it is not in an array   remove on wanted data
            if(!empty($this->allowColumn)){
                foreach ($data as 
                $key => $value) {
                   
                    if(!in_array($key, $this->allowedColumn)){
                        unset($data[$key]);
                    }
                    # code...
                }
            }
            $keys = array_keys($data);
    
            $query = "update " .$this->table. " set ";
            
            foreach($keys as $key){
                
                $query .= $key . "= :". $key. ","; 
            }
    
            $query = trim($query, ",");
            $query .= " where " .$id_column . " = :". $id_column. ","; 
            $query = trim($query, ",");
            $data[$id_column] = $id;
        
            $this->query($query,$data);
            return false;

             
        }

        public function delete($id,$id_column= 'id'){
            // echo $id_column;
            $data[$id_column] = $id;
            $query = "delete from $this->table where $id_column = :$id_column";

            $this->query($query,$data);

            return false;
        }


        
        public function InsertImage($data){
            $this->table = 'user_message';
            if(!empty($this->userMessage)){
                foreach ($data as 
                $key => $value){
                    if(!in_array($key, $this->userMessage)){
                        unset($data[$key]);
                        
                    }
                    # code...
                }
            }
            $key = array_keys($data);
            
            $query = "insert into $this->table (".implode(",", $key).") values (:".implode(",:",$key).")";
            
            $data = $this->query($query,$data);
            
            return false;



        }


        public function deleteRecord($id,$id_column= 'user_id'){
            $this->table = 'user_message';
            $data[$id_column] = $id;
            $query = "delete from $this->table where $id_column = :$id_column";
            
            $this->query($query,$data);

            return false;
        }
    


        // public function selectRecord($data, $data_not = []){
            
        //     $this->table = 'user_message';
        //     $keys = array_keys($data);
            
        //     $keys_not = array_keys($data_not);
        //     $query = "select * from $this->table where ";
        //     foreach($keys as $key){
            
        //         $query .= $key . " = :". $key. " && "; 
        //     }

        //     foreach($keys_not as $key){
        //         $query .= $key . "!= :". $key. " && "; 
        //     }
        //     $query = trim($query, " && ");
 
        //     $query .= " limit $this->limit offset $this->offset";

            
        //     $data = array_merge($data,$data_not);
            
           
        //     $result =  $this->query($query,$data);

        //     print_r($query);
        //     $result;
        //     if($result)
        //     return $result[0];
        //     return false;

            

        // }



        public function selectRecord($data){
            $this->order_column = "user_id";
            $this->table = 'user_message';
            $query = " select * from $this->table where ";
            foreach($data as $key => $keys){
                $query .= $key . " = :". $key; 
            }
            $query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
            return $this->queryRecord($query,$data);

        }
      
    }
    