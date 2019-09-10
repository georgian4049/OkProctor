<?php 

include('include/connect.php');

?>



<?php
  $usn =$_GET['usn'];
        $marks=$_GET['marks'];
 		$ia=$_GET['ia'];
 		$course=$_GET['course'];
?>





</script>
<?php 

      
 		echo "updated";

 		$upd=mysqli_query($conn,"UPDATE `$ia` set `$course`='$marks' where `usn`='$usn'");
 		if(!($upd))
 		{
 			echo "could not upload !! connection problem. sorry try again later";
 		}
 		
 		else
 		{
 			echo '<script>histjavascript:history.go(-1);</script>';
 		}

    ?>