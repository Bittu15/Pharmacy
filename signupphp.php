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
                    $nameError = $emailError = $numberError = $passwordError = "";
                           $name = $email = $number = $password= $sql ="";
                    
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
                      
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                          $emailError = "Invalid email format";
                        }
                      }
                       
                      if (empty($_POST["number"])) {
                        $numberError = "Phone Number is mandatory";
                      } else {
                        $number = test_input($_POST["number"]);
                        if(!preg_match('/^[0-9]{10}+$/', $number)){
                          $numberError = "Phone number is invalid";
                        }

                      } 
                      if (empty($_POST["password"])) {
                        $passwordError = "please give a password";
                      } else {
                        $password = ($_POST["password"]);
                      }
                      }

                    

                      $sql2  = " SELECT * FROM `signup` WHERE email = '$email'";
                                            $result = mysqli_query($con, $sql2);
                      $num = mysqli_num_rows($result);

                      if($num >= 1 ){
                          echo "An account with this email already exist.";
                          echo"<br>";
                          echo "Please login !";
                          // header("Location: loginphp.php");
                      }else{
                    
                     $sql  = "INSERT INTO `signup` ( `name`, `email`, `number`, `password`, `datetime`) VALUES ( '$name', '$email', '$number', '$password', current_timestamp());";
                      }
                      if($con ->query($sql2) == true ){
                          echo "";
                       echo " account already exist";
                       $insert = true;
                     }
                     else if ($con ->query($sql) == true ){
                        echo " please login ! your account has been setup ";
                       
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