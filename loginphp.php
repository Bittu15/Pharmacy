

<?php

                    $server = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "signup";
                    
                    $con = mysqli_connect("$server", "$username", "$password", "$database");
                    
                    if(!$con){
                    die("databse connection failed due to " .mysqli_connect_error());
                    }

                    $email = "";
                    $password = "";
// $targetfile = 'C:\xampp\htdocs\website_IT\itemlist.html';
// $linkname = 'itemlist';
                    if (empty($_POST["email"])) {
                        $emailError = "Email is mandatory";
                      } else {
                        $email = test_input($_POST["email"]);
                      
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                          $emailError = "Invalid email format";
                        }
                      }

                     if (empty($_POST["password"])) {
                        $passwordError = "please give a password";
                       } else {
                        $password = ($_POST["password"]);
                      }

                      $sql = " SELECT * FROM `signup` WHERE   email = '$email' AND password = '$password'";
                      $result = mysqli_query($con, $sql);
                      $num = mysqli_num_rows($result);

                    if($num == 0){
                        echo " You don't have an account. Please signup ";
                    }else{
                      header("Location:index.php");
                    }

                    if($con ->query($sql) == true){
                    // link($targetfile, $linkname);
                   
                   }
                   else{
                      echo "error: $sql <br> $con ->error" ;
                   }
                   $con->close();
                  
                  
                  function test_input($data) {
                    $data = trim($data);   
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                  }
                  ?>