
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Book Store - Book Guide Author, Publication and Store</title>
<!-- CUSTOM STYLE -->
<link href="assets/css/style.css" rel="stylesheet">
<!-- THEME TYPO -->
<link href="assets/css/themetypo.css" rel="stylesheet">
<!-- BOOTSTRAP -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<!-- COLOR FILE -->
<link href="assets/css/color.css" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- BX SLIDER -->
<link href="assets/css/jquery.bxslider.css" rel="stylesheet">

<link href="assets/css/bootstrap-slider.css" rel="stylesheet">

<link href="assets/css/widget.css" rel="stylesheet">
<!-- responsive -->
<link href="assets/css/responsive.css" rel="stylesheet">
<link href="assets/css/custom.css" rel="stylesheet">
<!-- Component -->
<link href="assets/js/dl-menu/component.css" rel="stylesheet">


</head>
<body>
    <nav class="navbar navbar-inverse" style = "background-color:black">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="profilepage">ProfilePage</a>
        </div>
        <ul class="nav navbar-nav">
          <!-- <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li> -->
          <li><a href="logout ">LOGOUT</a></li>
        </ul>
      </div>
    </nav>


    <div class="kode-content">
        <section class="kode-package-section">
        	<div class="container">
            	  <div class="section-content">
                	<h2>My Message</h2>
                    <!-- <p>Find your best prices of the books preimum packages that are available with us. You can purchase the prices and get the discount of the purchase of the books.</p> -->
                </div>  
            	  <div class="row">
                <?php
                $key = '';
                
                foreach ($data as $key => $value) {
                  # code...
                }
                if($key == 'empty' || $key == ''){
                  echo "<div class='col-md-4'>                   	
                  <div class='kode-package'>
                        <div class='header-bg'>
                          <img src='http://localhost/university-anonymous/public/assets/images/images (52).jpeg' alt='' style = 'height:300px'>
                        </div>
                        <div class='package-content'>
                            <h2 style = 'visibility:hidden'>Personal</h2>
                            <ul style = ''>
                              <li><p style = 'color:white;font-size:20px'>No Message Available</p></li> 
                                <li style = 'visibility:hidden'> <p>10 Comics</p></li>
                                <li style = 'visibility:hidden'><p style>5 Books</p></li>
                                <li style = 'visibility:hidden'><p>36 Magazines</p></li>
                            </ul>
                            
                            <!--<a href='#' class='purchase' style = 'margin-top:40px;border-radius:30px' data-toggle='modal' data-target='#'>Sent Message</a>
                            
                              <input class = 'btn' type='submit' value = 'Delete' style = 'border-radius:30px;margin-top:40px;background-color:black' name = ''>-->
                           
                        </div>
                    </div>   
                  </div>
                 ";
                }else{
                  $x = 0;
                  while($x <= count($data)-1) {
                    $result   = ($data[$x]['user_message']);  
                    $Image    = ($data[$x]['image_name']);
                    $Image    = $Image.'.jpg';
                    $imageId  = ($data[$x]['user_id']);
                    $full_image_id = 'image_modal_'.$imageId;

                    echo "<div class='col-md-4'>                   	
                      <div class='kode-package'>
                            <div class='header-bg'>
                              <img src='http://localhost/university-anonymous/public/assets/secret_image/$Image' alt='' style = 'height:300px'>
                            </div>
                            <div class='package-content'>
                                <h2 style = 'visibility:hidden'>Personal</h2>
                                <ul style = 'visibility:hidden'>
                                  <li><p>250 E-Books</p></li> 
                                    <li><p>10 Comics</p></li>
                                    <li><p>5 Books</p></li>
                                    <li><p>36 Magazines</p></li>
                                </ul>
                                <a href='#' class='purchase' style = 'margin-top:40px;border-radius:30px' data-toggle='modal' data-target='#$full_image_id'>Sent Message</a>
                                <form = '' method='POST' action = ''>
                                  <input class = 'btn' type='submit' value = 'Delete' style = 'border-radius:30px;margin-top:40px;background-color:black' name = '$imageId'>
                                </form>
                            </div>
                        </div>   
                      </div>
                      <div class='modal fade' id='$full_image_id' role='dialog'>
                        <div class='modal-dialog'>     
                          <!-- Modal content-->
                          <div class='modal-content'>
                            <!-- <div class='modal-header'>
                              <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              <h4 class='modal-title'>Modal Header</h4>
                            </div> -->
                            <div class='modal-body'>
                              <p>$result.</p>
                            </div>
                            <div class='modal-footer'>
                              <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                            </div>
                          </div>
                        </div>
                      </div>";
                    $x++;
                  } 
                }
                

                ?>
                 </div>
            </div>
        </section>
        <!--SERVICES PACKEGE END-->
    </div>
    

    </div>
    <div class="copyrights">
    	<div class="container">
        	<p>Copyrights © <?php echo date ('Y');?></p>
            <!-- <div class="cards" ><img src="asset/images/cards.png" alt=""></div> -->
        </div>
    </div>
  
<!--WRAPPER END-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="asset1/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/bootstrap-slider.js"></script>
<script src="assets/js/waypoints.min.js"></script> 
<script src="assets/js/jquery.counterup.min.js"></script> 
<script src="assets/js/dl-menu/modernizr.custom.js"></script>
<script src="assets/js/dl-menu/jquery.dlmenu.js"></script>
<script src="assets/js/classie.js"></script> 
<script src="assets/js/functions.js"></script>
<script>
   
 
</script>

</body>

</html>