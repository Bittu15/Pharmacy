<?php
<?php
$insert = false;
$server = "localhost";
$username = "root";
$password = "";
$database = "bill";

$con = mysqli_connect("$server", "$username", "$password", "$database");

if(!$con){
die("databse connection failed due to " .mysqli_connect_error());
}
$firstnameError = $lastnameError = $username = $emailError = $address1Error = $address2Error = $ZipError = $cardnameError = $cardnoError = $expiryError = $cvvError = "";
$firstname = $lastname = $username = $email = $address1 = $address2= $zip = $crdname = $cardno = $expiry = $cvv = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameError = "Name is mandatory";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
      $firstnameError = "Only letters allowed";
    }
  }
}
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lastname"])) {
      $lastnameError = "Name is mandatory";
    } else {
      $lastname = test_input($_POST["lastname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
        $lastnameError = "Only letters allowed";
      }
    }
  }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["username"])) {
        $usernameError = "Name is mandatory";
      } else {
        $username = $_POST["username"];
        // check if name only contains letters and whitespace
        }
      }
    
  if (empty($_POST["email"])) {
    $email = " ";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
    }
  }
   
  if (empty($_POST["address1"])) {
    $address1Error = "address is mandatory ";
  } else {
    $address1 = test_input($_POST["address1"]);
    }
  }

  if (empty($_POST["address2"])) {
    $address2 = " ";
  } else {
    $address2 = test_input($_POST["address2"]);
    }
  }
  if (empty($_POST["zip"])) {
    $zipError = "address is mandatory ";
  } else {
    $zip = test_input($_POST["zip"]);
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["cardname"])) {
      $cardnameError =  " please fill the name written on card ";
    } else {
      $cardname = test_input($_POST["cardname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$cardname)) {
        $cardnameError = "Only letters allowed";
      }
    
    }
    if (empty($_POST["cardno"])) {
      $cardError = "card number is mandatory ";
    } else {
      $cardno= test_input($_POST["cardno"]);
      }
    }
    if (empty($_POST["expiry"])) {
      $expiryError = "this is mandatory ";
    } else {
      $expiry= test_input($_POST["cardno"]);
      }
    }
    if (empty($_POST["cvv"])) {
      $cvvError = "cvv is mandatory ";
    } else {
      $cvv= test_input($_POST["cvv"]);
      }
    }
    
    $sql ="INSERT INTO `billdesk` ( `first name`, `last name`, `username`, `email`, `address1`, `address2`, `zip`, `card  name`, `card number`, `expiry`, `cvv`, `datetime`) VALUES ( '$firstname', '$lastname', '$username', '$email', '$address1', '$address2', '$zip', '$cardname', '$cardno', '$expiry', '$cvv', current_timestamp());";

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

      

