<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign UP/University-Anonymous</title>
<link rel="stylesheet" property="stylesheet" href="<?=ROOT?>/assets/css/signup.css">

<style>
  
</style>
</head>
<body>
  <!-- <div class="logo">
    <h1>SAMTECH ACADEMY</h1>
    
    
     <p></p>
  </div> -->
  <!-- <div style = "color:red;font-size:px;text-align:center;position:absolute;bottom:400px;right:540px"> -->
        <?php
            // print_r($errors);
            if(isset($errors) && is_array($errors)){
                foreach ($errors as $error) {
                    if($error == 'username can only have letters and space'){
                        echo "<div style = 'color:red;font-size:px;text-align:center;position:absolute;bottom:400px;right:470px'>$error</div>"; 
                    }else{
                        echo "<div style = 'color:red;font-size:px;text-align:center;position:absolute;bottom:400px;right:550px'>$error</div>"; 
                    }
                     
                }
            }elseif(isset($errors) && is_string($errors)){
                echo "<div style = 'color:red;font-size:px;text-align:center;position:absolute;bottom:400px;right:440px'>$errors</div>";
                 
            }
        ?>
    
  <form action="" method = "post">
    
        <h2>Sign UP</h2>
        <input name = "username" class = "input" type="text" placeholder = "Username" value = "<?=isset($_POST['username']) ? $_POST['username'] : '';?>">
        <input name = "email" class = "input" type="text" name = "email" placeholder = "Email" value = "<?=isset($_POST['email']) ? $_POST['email'] : '';?>">
        <input name = "password" class = "input"type="text" placeholder = "Password" value = "<?=isset($_POST['password']) ? $_POST['password'] : '';?>">
        
        
        <p><a href="<?=ROOT?>/login">click here</a> To Signup</p>
        
        <input class = "btn" type="submit" value = "signin">
    </form>

  
    <script src="<?=ROOT?>/assets/js/jquery.js" type="text/javascript"> 
    </script>
    
        
       
</body>
</html>
