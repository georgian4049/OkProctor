<?php
include('include/connect.php');
include('include/head.php');


$fetching_all_shares=mysqli_query($conn,"SELECT * from `share` where (`receivers`='faculty(all)' or (`receivers`='faculty(branch)' and (`branch`='$branch' or `branch`='all') )or (`receivers`='college')) ");
$num=mysqli_num_rows($fetching_all_shares);
$topic_fetched=array();
$description_fetched=array();
$file_fetched=array();
$date_fetched=array();
$receivers_fetched=array();
$id_fetched=array();
$name_fetched=array();
$sem_fetched=array();
$k=0;
while($fetching_all_shares_row=mysqli_fetch_array($fetching_all_shares))
{
  $k++;

$topic_fetched[]=$fetching_all_shares_row['topic'];
$description_fetched[]=$fetching_all_shares_row['description'];
$material_fetched[]=$fetching_all_shares_row['material'];
$date_fetched[]=$fetching_all_shares_row['date'];
$id_fetched[]=$fetching_all_shares_row['id'];
$name_fetched[]=$fetching_all_shares_row['name'];
$receivers_fetched[]=$fetching_all_shares_row['receivers'];
$sem_fetched[]=$fetching_all_shares_row['sem'];

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
                          
                        for($i=$num-1;$i>=$num-2;$i--){
                          

                        echo '
                       
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <ul class="messages">
                          <li>
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h6 class="date text-info">'.$date_fetched[$i].'</h3>
                              
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">'.$topic_fetched[$i].' </h4>
                              <blockquote class="message">'.$description_fetched[$i].'</blockquote>
                              <br />
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                           <a href="../upload/'.$material_fetched[$i].'" target="blank"><i class="fa fa-paperclip"></i> '.$material_fetched[$i].' </a>
                                 <p><font color="blue">Shared with '."".$receivers_fetched[$i]." ".$sem_fetched[$i].'  sem</font><font style="padding-left:20px;" align="center" size="2"> by '." ". $id_fetched[$i]." , ".$name_fetched[$i]." ".'</font></p>

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
                          
                        	 echo '<p> No Shares till Now . Share to make a healthy community</p>';

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