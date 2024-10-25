
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/59af9492ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style1.css">
    <title>Login/University-Anonymous</title>
    <link href="assets/images/icon.png" rel="icon">
</head>
<body>
    <div class="profile-page">
            <div class="head" style = "color:white">
                <div class="head-section">
                    <h1>Hi, <?=$_SESSION['USER']->username?></h1><br>
                    <!-- <p>V - Anonymous Messages</p> -->
                   
                    <p id = "userlink"><?=ROOT. '/sendmessage?='.$_SESSION['USER']->username?></p>    
                </div>
                <div class="head-section-right">     
                </div> 
            </div>
        <div class="tail">
           
           
                <div class="view">
                    <h3 style = "text-transform:capitalize"><?=$_SESSION['USER']->username?>'s Profile</h3>
                    <div class="right"><a href="#" onclick = "
                    copyUserLink()">Copy Link</a></div>
                </div>
                        <a style="margin-bottom: 40px;" href="sentmessage" class="mid">View Messages</a>
                        
                        <a style="margin-bottom: 40px; background-color: #3c3c3c;" href="#" class="mid">Share My Profile</a>
                        <a style="margin-bottom: 40px; background-color: #b4b4b4;" href="#" class="mid">Share on WhatsApp</a>
                        <a style="background-color: #070807" href="#" class="mid">Share on Instagram</a>


                        <div class="components">
                            <div class="left">
                            <h3>Terms and Conditions</h3>
                            <p>Click icon to navigate to terms</p>
                            </div>
                             <div class="right">
                                <a href="terms.html">
                                    <img src="assets/images/right-arrow.png" alt="">
                                </a>
                            </div>
                        </div>
    
            </div>
        </div>
        
        
    </div>


<script src="assets/js/index.js"></script>

<script>
    function copyUserLink(){
        let copyText =  document.getElementById('userlink');
        let range = document.createRange();
        range.selectNode(copyText);
        
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
    
        document.execCommand("copy");
        alert('copied successfully');
        
    }
</script>
</body>
</html>