<?php>
 include("db.php");

 $sql = "SELECT * FROM items";
 $query = mysqli_query($conn,$sql);
 while($row = mysqli_fetch_assoc($query)){
 ?>
<option id="<?php echo $row['id']; ?>" value="<?php echo $row['product']; ?>" class="vegitable custom-select">
 <?php echo $row['product']; ?>
</option>

<option class="vegitable custom-select">
 p1
</option>


 <?php  
// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "signup";

// $con = mysqli_connect("$server", "$username", "$password", "$database");
// if(!$con){
//    die("databse connection failed shreyat" .mysqli_connect_error());
//    }
//    if($con ->query($sql) == true){
//       echo " Your message has been sent successfully";
//       $insert = true;
//     }
//     else{
//        echo "error: $sql <br> $con ->error" ;
//     }
//      $con->close();
//    }
?>