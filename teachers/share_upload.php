<?php
include('include/connect.php');



$file_name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($file_name, "."); 

$fileextension= substr($file_name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['description'];
$topic=$_POST['topic'];
$receivers=$_POST['receivers'];
$date=date('y-m-d');
$sem=$_POST['sem'];

if (isset($file_name)) {

$path= '../upload/'.$file_name;

if (!empty($file_name)){
if (move_uploaded_file($tmp_name, $path)) {
$msg='uploaded';

} 
}
}

if(empty($topic))
{
	echo '<script >alert("enter topic name");</script>';
	header('location:share.php');
	echo '<script >alert("enter topic name");</script>';
}

if(!empty($description)){
 $material_insert=mysqli_query($conn,"INSERT INTO `share`(`id`,`name`,`topic`,`description`,`receivers`,`branch`,`sem`,`material`,`date`) values('$id','$name','$topic','$description','$receivers','$branch','$sem','$file_name','$date')");
 header('location:share.php');
}





?>