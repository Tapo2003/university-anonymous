
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- <link href="assets/images/icon.png" rel="icon"> -->
    <title>Drop message</title>
    <!-- StyleSheet-->
    
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/boxicons.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/bootstrap-login-form.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/login.css">
    
   
  



</head>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
         <h1 class="text-light"><a href="#"><span>Send Message</span></a></h1>
        
      </div>

      <nav id="navbar" class="navbar">
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- Login Form -->                    
  
  <body>
    <!-- Start your project here-->
  
    <style>
      .divider:after,
      .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
      }
      .error {
        color: red;
     }
     #message-popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #f9f9f9;
      padding: 20px;
      border: 1px solid #ddd;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    </style>
    
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <?php
            
            if(count($data) > 0){
              // exit;
              // $url    =  $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
              // $url    = explode("=", $url);
              // $url    = end($url);
              
              // echo $url;
              echo "<h4>There is no one with the username $username. Try looking for any possible typos. Or, you can get started by registering with the username $username right now. Tap on 'Register Now' button!</h1>";
            }else{
              echo '<img src="http://localhost/university-anonymous/public/assets/images/16.jpg" class="img-fluid img-circle" alt="" >';
            }
            ?>
          </div>
          
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
             <form name = 'userForm' method='POST' enctype = "multipart/form-data" action = "#">
                <div class='form-outline mb-4'>
                
                <?php
                  if($fetchUsername != $username){
                    echo "<input type='text' placeholder= '' name ='user_message' id='message'  required='' class='form-control form-control-lg' style='width: 100%; height: 100px;' disabled>
                      <label class='form-label' for='form1Example23'>* Message</label>
                    </div>
                    <div class='divider d-flex align-items-center my-4'>
                        <p class='text-center fw-bold mx-3 mb-0 text-muted'>Add a picture if needed </p>
                    </div>
                    <div class='form-outline mb-4'>
                        <input type='file' id='documentUpload' name ='file' class='form-control form-control-lg' accept='.pdf, .doc, .docx, .jpg, .jpeg, .png, .gif' disabled>
                        <input type='hidden' name='image_status' value='F'>
                        <input type='hidden' name='message_receiver' value=''>
                        <input type='hidden' name='image_name' value=''>
                        <label class='form-label' for='documentUpload'></label>
                    </div>";
                  }else{
                    echo "<input type='text' placeholder= '' name ='user_message' id='message' required='' class='form-control form-control-lg' style='width: 100%; height: 100px;'>
                    <label class='form-label' for='form1Example23'>* Message</label>
                  </div>
                  <div class='divider d-flex align-items-center my-4'>
                    <p class='text-center fw-bold mx-3 mb-0 text-muted'>Add a picture if needed </p>
                  </div>
                  <div class='form-outline mb-4'>
                    <input type='file' id='documentUpload' name ='file' class='form-control form-control-lg' accept='.pdf, .doc, .docx, .jpg, .jpeg, .png, .gif'>
                    <input type='hidden' name='image_status' value='F'>
                    <input type='hidden' name='message_receiver' value=''>
                    <input type='hidden' name='image_name' value=''>
                    <label class='form-label' for='documentUpload'></label>
                  </div>";
                  }
                ?>
                 
               
                <?php
                  if($fetchUsername != $username){
                    echo "<button type='submit'  value='button' class='btn btn-primary btn-lg btn-block' disabled style = 'background-color:black'>Send anonymous message</button>";
                    
                  }else{
                    echo "<button type='submit'  value='button' class='btn btn-primary btn-lg btn-block' onclick = 'signIn()'' style = 'background-color:black'>Send anonymous message</button>";
                  }
                ?>
                <!-- <button type='submit'  value='button' class='btn btn-primary btn-lg btn-block' onclick = "signIn()">Send anonymous message</button> -->

                <!-- <button type="button" class="btn btn-primary disabled">Disabled Primary</button> -->

              </form>  
          </div>
         
        </div>
      </div>
    </section>
   
    <!-- End your project here-->
    <script src = "assets/js/jquery.js"></script>          
    <script src="assets/js/mdb.min.js"></script>


    <!-- <script>
      
      function clearFields(){ 
        $("#message").val('');
        $("#documentUpload").val('');  
        $("#picture_hidden_tag").val("F"); 
          
      }      
    </script> -->
  </body>

  


   <!-- Login End -->



</html>