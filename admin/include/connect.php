<?php
session_start();
error_reporting(1);
$servername = "localhost";
$usernam = "root";
$password = "";
$db="okproctor";


// Create connection
$conn = mysqli_connect($servername, $usernam, $password,$db);
if($conn==false){die('Unable to connect!');}

if(isset($_POST['login']))

      {
  $username=$_POST['username'];
  $password=$_POST['password'];
  if($username=='' OR $password==NULL){
  $error='All the fields are required.';
  }
  else{
  $sql=mysqli_query($conn,"SELECT `username` FROM `admin` WHERE `username`='$username'");
  $count=mysqli_num_rows($sql);
  $sql_pass=mysqli_query($conn,"SELECT `password` FROM `admin` WHERE `username`='$username'");
  $row=mysqli_fetch_assoc($sql_pass);
  $row1=mysqli_fetch_assoc($sql);

  $pass=$row['password'];
if($pass!=$password)
  {
    $errorlog= "wrong password";    
  }
  else
  { session_start();
    $_SESSION['username'] = $username;
    $username=$_SESSION['username'];
       header('location:home.php');
  }
}
   } 
$username=$_SESSION['username'];


?>