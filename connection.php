<?php
session_start();
 require_once("function.php");
 //database connection
  $con=mysqli_connect("localhost","root","","vuresult");
if(!$con){
  echo "MySQL Error:".mysqli_error();
}

?>