<?php
include('include/connect.php');


if(isset($_POST['submit']))
{ 
  
  $sqlhjhhj=mysqli_query($conn,"INSERT INTO course(branch,sem) values('ise','4')");
  header('location:enter1.php');

 
}
else
{
  
}

?>