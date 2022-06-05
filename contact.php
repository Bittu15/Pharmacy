<?php
$insert = false;
$server = "localhost";
$username = "root";
$password = "";
$database = "signup";

$con = mysqli_connect("$server", "$username", "$password", "$database");

if(!$con){
die("databse connection failed due to " .mysqli_connect_error());
}
$nameError = $emailError = $subjectError = $messageError = "";
$name = $email = $subject = $message = "";

//  $name    =$_POST['name'];
//  $email   =$_POST['email'];
//  $subject =$_POST['subject'];
//  $message =$_POST['message'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Name is mandatory";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameError = "Only letters allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailError = "Email is mandatory";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
    }
  }
   
  if (empty($_POST["email"])) {
    $subjectError = "Email is mandatory";
  } else {
    $subject = test_input($_POST["subject"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[a-zA-Z-' ]*$/",$subject)) {
      $subjectError = "Invalid subject";
    }
  } 
  if (empty($_POST["message"])) {
    $message = "please write a message";
  } else {
    $message = test_input($_POST["message"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$message)) {
      $messageError = "Invalid message";
    }
  }

    

 $sql  = "INSERT INTO `contact_us` ( `Name`, `Email`, `Subject`, `Message`, `date_time`) VALUES ( '$name', '$email', '$subject', '$message', current_timestamp());";

  if($con ->query($sql) == true){
   echo " Your message has been sent successfully";
   $insert = true;
 }
 else{
    echo "error: $sql <br> $con ->error" ;
 }
 $con->close();
} 


function test_input($data) {
  $data = trim($data);   
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

      
      
<!doctype html>
<html lang="en"><head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <title>Contact Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c74df327fb.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/A.style.css.pagespeed.cf.ujDyF7i_mh.css">
    </head>
    <body>
      

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
    
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CITY MEDICAL AGENCIES</a>
       
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            
        </span>
      </button>
      <div class="collapse navbar-collapse" style="text-align: right;" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="aboutus.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link asdfg"  href="contact.php">Contact us</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="salepage.html">Sale</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="itemlist.html">Item list</a>
          </li> -->
          
          
        </ul>
        
      </div>
    </div>
  </nav> -->


    <section class="ftco-section" style="margin-top: 17vh;">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
    <h2 class="heading-section">Contact Form </h2>
    </div>
    </div>


    <div class="d-flex shadow-lg p-3 mb-5 bg-body rounded">

        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
            <div class="wrapper">
            <div class="row no-gutters">
            <div class="col-md-7 d-flex align-items-stretch">
            <div class="contact-wrap w-100 p-md-5 p-4">
            <h3 class="mb-4">Get in touch</h3>
            
            <<div id="form-message-warning" class="mb-4">
             <?php
             if($insert == false){
               //echo" Please tryy again after some time ";
               
              
             }
            ?>
            </div>
          
            <div id="form-message-success" class="mb-4" >
            <?php
             if($insert == true){
              // echo "Your message was sent, thank you!";
             } 
             ?> 
             </div>  
            
           
            <form method="POST" id="contactForm" name="contactForm" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <input type="text" class="form-control"  required="required" name="name" id="name" placeholder="Name" >
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
             <!--<div class="col-md-12">
              <div class="form-group">
              <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone">
              </div> -->
            </div>
            <div class="col-md-12">
            <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
            <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message" required></textarea>
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary">
            <div class="submitting"></div>
            </div>
            </div>
            </div>
            </form>
            </div>
            </div>
            
            <div class="col-md-5 d-flex text-white align-items-stretch">
            <div class="info-wrap bg-primary w-100 p-lg-5 p-4 " >
            <h3 class="mb-4 mt-md-4">Contact us</h3>
            <div class="dbox w-100 d-flex align-items-start">
            <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-map-marker"></span>
            </div>
            <div class="text pl-3">
            <p><span>Address:</span> 65, Kanadia Main Rd, Bengali Colony, Indore, Madhya Pradesh 452001</p>
            </div>
            </div>
            <div class="dbox w-100 d-flex align-items-center">
            <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-phone"></span>
            </div>
            <div class="text pl-3">
            <p><span>Phone:</span> <a href="tel://1234567920" style="color:aliceblue">+ 91 8989176418</a></p>
            </div>
            </div>
            <div class="dbox w-100 d-flex align-items-center">
            <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-paper-plane"></span>
            </div>
            <div class="text pl-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com" style="color:aliceblue">cjain201@gmail.com</a></p>
            </div>
            </div>
            <div class="dbox w-100 d-flex align-items-center">
            <div class="icon d-flex align-items-center justify-content-center">
            <span class="fa fa-globe"></span>
            </div>
            <div class="text pl-3 text-white" >
            <p><span style="display: inline-block; color: aliceblue;">Website</span> <a style="color:aliceblue" href="#">yoursite.com</a></p>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
        
            
    </div>



    </div>
    </section>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js+bootstrap.min.js.pagespeed.jc.7adpfqBZ88.js"></script><script>eval(mod_pagespeed_5dZzrf8E59);</script>
    <script>eval(mod_pagespeed_h$F24jwIwo);</script>
    <script src="js/jquery.validate.min.js+main.js.pagespeed.jc.ekFiGaxosk.js"></script><script>eval(mod_pagespeed_v8vQGn$Lpa);</script>
    <script>eval(mod_pagespeed_l4mKZJCuBi);</script>
    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon="{&quot;rayId&quot;:&quot;6952745ea8850f14&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.8.1&quot;,&quot;si&quot;:10}"></script>
    
    
    

    <footer class=" pt-3 " style="background-color: black; width: 100%;">

      <div class="d-flex justify-content-around">

        <div class="iioo">
  
          <a href="https://www.facebook.com/Sourabh.don007" target="blank">
            <i class="fab fa-facebook text-white fa-3x" aria-hidden="true"></i>
          </a>
        
      </div>
      
      <div class="iioo">
        
          <a href="https://instagram.com/sourabh_lodha?utm_medium=copy_link" target="blank">
            <i class="fab fa-instagram text-white fa-3x" aria-hidden="true"></i>
          </a>
        
      </div>
      
      <div class="iioo">
        <a href="https://mobile.twitter.com/sourabhlodha85" target="_blank">
          <i class="fab fa-twitter text-white fa-3x tcenter" aria-hidden="true"></i>
        </a>
      </div>
      
        <!-- <i class="fab text-white fa-3x fa-whatsapp-square"></i> -->
        
        
        <div>
          <a href=""></a>
        </div>
        
        <div><a href="pay.html">
          <i class="fab text-white fa-3x fa-google-pay"></i>
        
        </a>
        </div>
        
           <div>
             <a href="pay.html">
              <i class="fab text-white fa-3x fa-cc-amazon-pay"></i>
             </a>
           </div>
                
      </div>
      <br>
      <div class="iconsstext text-center">
        <p class="twhite ">
        CITY MEDICAL AGENCIES © 2002, All Rights Reserved
        </p>

      </div>

    </footer>

    </body></html>
       
