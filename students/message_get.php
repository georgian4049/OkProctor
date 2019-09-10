<?php 
include('include/connect.php');
$file_name= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
$submitbutton= $_POST['submit'];
$position= strpos($file_name, "."); 
$fileextension= substr($file_name, $position + 1);
$fileextension= strtolower($fileextension);
$subject= $_POST['subject'];
$type=$_POST['topic'];
$message=$_POST['message'];
$course_code=$_POST['course_code'];

$teacher_id=$_POST['teacher_id'];
$date=date('y-m-d');

if (isset($file_name)) {
$path= '../upload/'.$file_name;
if (!empty($file_name)){
if (move_uploaded_file($tmp_name, $path)) {
$msg='uploaded';
}
}
}
if(!empty($type)){
 $material_insert=mysqli_query($conn,"INSERT INTO `message`(`receiver`,`sender`,`name`,`subject`,`type`,`message`,`file`,`date`,`course_code`) values('$teacher_id','$id','$name','$subject','$type','$message','$file_name','$date','$course_code')");
 echo '<script>histjavascript:history.go(-1);</script>';
}


?>




