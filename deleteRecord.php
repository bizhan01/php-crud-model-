<?php
  require_once("database.php");
  $id=$_GET['id'];
  $q="delete from records where id =$id";
  $delete=mysqli_query($con,$q);

  if($delete){
    header("location:list.php");
  }
  else {
    echo "Not deleted";
  }
?>
