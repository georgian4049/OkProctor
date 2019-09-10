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
  $username=$_POST['id'];
  $password=$_POST['password'];
  if($username=='' OR $password==NULL){
  $error='All the fields are required.';
  }
  else{
  $sql=mysqli_query($conn,"SELECT `id` FROM `teachers` WHERE `id`='$username'");
  $count=mysqli_num_rows($sql);
  $sql_pass=mysqli_query($conn,"SELECT `pwd` FROM `teachers` WHERE `id`='$username'");
  $row=mysqli_fetch_assoc($sql_pass);
  $row1=mysqli_fetch_assoc($sql);

  $pass=$row['pwd'];
  if($count==0)
  {
    $erroruser="wrong username";
  }
elseif($pass!=$password)
  {
    $errorpass= "wrong password";    
  }
  else
  { session_start();
    $_SESSION['id'] = $username;
    $id=$_SESSION['id'];
       header('location:home.php');
  }
}
   } 
$id=$_SESSION['id'];
$fetch=mysqli_query($conn,"SELECT * from `teachers` where `id`='$id'");
$value=mysqli_fetch_assoc($fetch);
$name=$value['first_name']." ".$value['last_name'];
$branch=$value['branch'];
$co1=$value['co1'];
$co2=$value['co2'];
$lab_code=$value['lab'];
$location=$value['address'];
$designation=$value['designation'];
$email=$value['email'];
$doj=$value['date_of_joining'];
$gender=$value['gender'];
$pass=$value['pwd'];
?>