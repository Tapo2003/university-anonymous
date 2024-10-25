<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login/University-Anonymous</title>
<link rel="stylesheet" property="stylesheet" href="<?=ROOT?>/assets/css/cover.css">


<style>
  
</style>
</head>
<body>
  <!-- <div class="logo">
    <h1>SAMTECH ACADEMY</h1>
    
    
     <p></p>
  </div> -->
    <?php
    
    if(isset($errors) && is_array($errors)){
        foreach ($errors as $error) {
            echo "<div style = 'color:red;font-size:px;text-align:center;position:absolute;bottom:400px;right:545px'>$error</div>";
        }
    }else if(isset($errors) && is_string($errors)){
        
        echo "<div style = 'color:red;font-size:px;text-align:center;position:absolute;bottom:400px;right:545px'>$errors</div>";
    }

    ?>  

    
  <form action="" method = "post">
        <h2>Login</h2>
        <input name = "email" class = "input" type="text"  placeholder = "Email" value = "<?=isset($_POST['email']) ? $_POST['email'] : '';?>">
        <input name = "password" class = "input" type="text" placeholder = "Password" value = "<?=isset($_POST['password']) ? $_POST['password'] : '';?>">
        
        
        <p><a href="<?=ROOT?>/signup">click here</a> To Signup</p>
        
        <input class = "btn" type="submit" value = "signin">
    </form>

  
    <script src="<?=ROOT?>/assets/js/jquery.js" type="text/javascript"> 
    </script>
    
</body>
</html>
