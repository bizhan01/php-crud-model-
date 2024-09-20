<?php
session_start();
require_once("database.php");

if (isset($_POST['submit'])){
  $name = $_POST["name"];
  $lastName = $_POST["lastName"];
  $email = $_POST["email"];

  $q="INSERT INTO `records` ( `name`, `lastName`,`email`) VALUES ( '$name', '$lastName','$email')";
   $insert = mysqli_query($con, $q);
   if($insert){
     header('Location:index.php');
	    $_SESSION['success']=true;
   }
   else {
     echo "Not Inserted";
   }
}
 ?>
