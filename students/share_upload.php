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
if(!empty($description)){
 $material_insert=mysqli_query($conn,"INSERT INTO `share`(`id`,`name`,`topic`,`description`,`receivers`,`branch`,`sem`,`material`,`date`) values('$id','$name','$topic','$description','$receivers','$branch','$sem','$file_name','$date')");
 header('location:share.php');
}
$fet=mysqli_query($conn,"SELECT * FROM `share` where `receivers`='college'");
$row=mysqli_fetch_assoc($fet);
$img=$row['material'];
$files_show= "upload/".$img;
echo "<div align=center><a href='".$files_show."'>$files_field</a></div>";
echo '<a href="'.$files_show.'">'.$files_show.'</a>';
?>