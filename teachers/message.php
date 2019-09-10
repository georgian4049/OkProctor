<?php
include('include/connect.php');
include('include/head.php');


$fetching_all_shares=mysqli_query($conn,"SELECT * from `message` where `receiver`='$id' ");
$num=mysqli_num_rows($fetching_all_shares);
$type=array();

$file_fetched=array();
$date_fetched=array();
$sender_fetched=array();
$course=array();

$name_fetched=array();
$subject_fetched=array();
$message_fetched=array();
$k=0;
while($fetching_all_shares_row=mysqli_fetch_array($fetching_all_shares))
{
  $k++;

$type[]=$fetching_all_shares_row['type'];

$file_fetched[]=$fetching_all_shares_row['file'];
$date_fetched[]=$fetching_all_shares_row['date'];
$course[]=$fetching_all_shares_row['course_code'];
$name_fetched[]=$fetching_all_shares_row['name'];
$sender_fetched[]=$fetching_all_shares_row['sender'];
$subject_fetched[]=$fetching_all_shares_row['subject'];
$message_fetched[]=$fetching_all_shares_row['message'];

}



?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Received</h2><small></small>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                  

                     <div>
  <div class="col-md-12 col-sm-12 col-xs-12">
                                               
                           
                        <?php   
                        if($num!=0){
                          
                        for($i=$num-1;$i>=0;$i--){
                          

                        echo '
                       
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <ul class="messages">
                          <li>
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h6 class="date text-info">'.$date_fetched[$i].'</h3>
                              
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">'.$type[$i].' ( '.$course[$i].' )</h4>
                              <blockquote class="message">'.$subject_fetched[$i].'</blockquote> '.$type_fetched[$i].' 
                              <br />
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                           <a href="../upload/'.$file_fetched[$i].'" target="blank"><i class="fa fa-paperclip"></i> '.$file_fetched[$i].' </a>
                                 <p>Sender -> <font color="blue">'."".$sender_fetched[$i].", ".$name_fetched[$i].'</font></p>

                              </p>
                            </div>
                          </li>
                          </ul>
                          </div>
                        
                         ';
                         if($i==0)
                         {
                          break 1;
                         }
                        }}
                        else
                        {
                          
                        	 echo '<p> No mess till now</p>';

                        }
                        ?>
                           </div>
                         </div>
                        <!-- end of user messages -->


                      </div>
                      

                    </div>
                      



                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                     
                   

<?php
include('include/footer.php');

?>