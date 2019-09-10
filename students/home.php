<?php
include('include/connect.php');
include('include/head.php');

#IA-1 MARKS
$sql_marks =mysqli_query($conn,"SELECT * from `ia1` where `usn`='$id'");
$ia1=array();
$i=0;
$ia1=mysqli_fetch_row($sql_marks);

#IA-2 MARKS
$sql_marks =mysqli_query($conn,"SELECT * from `ia2` where `usn`='$id'");
$ia2=array();
$i=0;
$ia2=mysqli_fetch_row($sql_marks);

#IA-3 MARKS
$sql_marks =mysqli_query($conn,"SELECT * from `ia3` where `usn`='$id'");
$ia3=array();

$ia3=mysqli_fetch_row($sql_marks);

$sql_sub=mysqli_query($conn,"SELECT * from `course` where `branch`='$branch' and `sem`='$sem'");
$sub_code=array();

$sub_code=mysqli_fetch_row($sql_sub);

function best_avg($a,$b,$c)
{   $one=0;
	$two=0;
	if(($a<$b)&&($a<$c))
	{
		$one=$c;
		$two=$b;
	}
	elseif(($b<$a)&&($b<$c))
	{
		$one=$a;
		$two=$c;
	}
	else
	{
		$one=$a;
		$two=$b;
	}
	$average= ((($one+$two)/100)*15);
	return($average);
}

//shared info 

$fetching_all_shares=mysqli_query($conn,"SELECT * from `share` where (`receivers`='students(branch)' and (`sem`='all' or `sem`='$sem')) or (`receivers`='students(all)' and (`branch`='$branch' or `branch`='all')) or (`receivers`='college') ");
$num=mysqli_num_rows($fetching_all_shares);
$topic_fetched=array();
$description_fetched=array();
$file_fetched=array();
$date_fetched=array();
$receivers_fetched=array();
$id_fetched=array();
$name_fetched=array();
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

  <!-- page content -->
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
                    <h2>INTERNAL ASSESSEMENT<small>MARKS</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                 
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        	<th>IA</th>
                          <?php 
                          
                          for($i=2;$i<10;$i++)
                          {
                          echo '<th>'.$sub_code[$i].'</th>';
                          }
                          ?>
                        </tr>
                      </thead>


                      <tbody>
                      	
                      	<tr>
                        <?php 
                        echo '<td>1</td>';
                        for($i=1;$i<9;$i++)
                        { 
                        echo '<td>'.$ia1[$i] .'</td>';

                      }
                       ?>
                       </tr>
                       		<tr>
                        <?php 
                        echo '<td>2</td>';
                        for($i=1;$i<9;$i++)
                        { 
                        echo '<td>'.$ia2[$i] .'</td>';

                      }
                       ?>
                       </tr>
                       	<tr>
                        <?php 
                        echo '<td>3</td>';
                        for($i=1;$i<9;$i++)
                        { 
                        echo '<td>'.$ia3[$i] .'</td>';

                      }
                       ?>
                       </tr>
                        <tr>
                       		
                        <?php 
                        echo '<td>AVG</td>';
                        for($i=1;$i<9;$i++)
                        { 
                        echo '<td>'.best_avg($ia1[$i],$ia2[$i],$ia3[$i]) .'</td>';

                      }
                       ?>
                       </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
               <div>

<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Recent Shares</h2><small></small>
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
        <!-- /page content -->


<?php
include('include/footer.php');
?>