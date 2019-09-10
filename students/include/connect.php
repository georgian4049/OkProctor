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
  $username=$_POST['usn'];
  $password=$_POST['password'];
  if($username=='' OR $password==NULL){
  $error='All the fields are required.';
  }
  else{
  $sql=mysqli_query($conn,"SELECT `usn` FROM `student` WHERE `usn`='$username'");
  $count=mysqli_num_rows($sql);
  $sql_pass=mysqli_query($conn,"SELECT `password` FROM `student` WHERE `usn`='$username'");
  $row=mysqli_fetch_assoc($sql_pass);
  $row1=mysqli_fetch_assoc($sql);
  $usn=$row1['usn'];
  $branch=$row1['branch'];
  $pass=$row['password'];
  if($count!=1)
  {
    $error= "Please Enter a valid user ID";
  }
  elseif($pass!=$password)
  {
    $errorlog= "wrong password";    
  }
  else
  { session_start();
    $_SESSION['usn'] = $username;
    $id=$_SESSION['usn'];
       header('location:home.php');
  }
}
   } 
$id=$_SESSION['usn'];
$fetch=mysqli_query($conn,"SELECT `first_name`,`last_name`,`branch`,`sem` from `student` where `usn`='$id'");
$value=mysqli_fetch_assoc($fetch);
$name=$value['first_name']." ".$value['last_name'];
$branch=$value['branch'];
$sem=$value['sem'];
 

?>