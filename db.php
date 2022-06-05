<?php 
//   include("db.php");
 
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "signup";
  
  $con = mysqli_connect("$server", "$username", "$password", "$database");
  if(!$con){
     die("databse connection failed db " .mysqli_connect_error());
     }
     
   $sql = "SELECT * FROM items WHERE id='".$_POST['id']."'";
   $query = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_assoc($query))
   {
         $data = $row;
   }
    echo json_encode($data);
    if($con ->query($sql) == true){
      echo " Your message has been sent successfully";
      $insert = true;
    }
    else{
       echo "error: $sql <br> $con ->error" ;
    }
    $con->close();
   }

 ?>

