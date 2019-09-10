<?php
include('include/connect.php');


if(isset($_POST['submit']))
{
  $old=$_POST['old'];
  $new=$_POST['new'];
  $re=$_POST['re'];
  if($new!=$re)
  {
    $error_re="Re-enter same password";
       header('location:profile.php');
  }
 elseif($old!=$pass)
  {
    $error_wrong_pwd="enter correct password";
       header('location:profile.php');
  }
  else
  {
  $upd=mysqli_query($conn,"UPDATE `teachers` set `pwd`='$new' where `id`='$id' ");
  $success="password successfully updated";
   header('location:profile.php?'.$error_wrong_pwd.'/'.$error_re);

  }

}
?>