<?php
include('include/connect.php');
include('include/head.php');

$course_name_fetch = mysqli_query($conn,"SELECT `sub_name` FROM `course_name` where `sub_code`='$courses_array[7]' ");
                      $course_name_fetched=mysqli_fetch_assoc($course_name_fetch);
                      $course_name_val=$course_name_fetched['sub_name'];

$teachers_fetch=mysqli_query($conn,"SELECT * from `teachers` where `co1`='$courses_array[7]' or `co2`='$courses_array[7]' or `lab`='$courses_array[7]' and `branch`='$branch' ");
$fetched=mysqli_fetch_assoc($teachers_fetch);
$id_teacher=$fetched['id'];
$name=$fetched['first_name']." ".$fetched['last_name'];
$email=$fetched['email'];
$designation=$fetched['designation'];
$gender=$fetched['gender'];

if($designation=="Professor")
{
  $name="Dr."." ".$name;
}
elseif($gender=="Male")
{
  $name="Mr."." ".$name;
}
elseif($gender)
{
  $name="Ms."." ".$name;
}

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
$fetching_all_shares=mysqli_query($conn,"SELECT * from `share` where ((`receivers`='students(branch)' and (`sem`='all' or `sem`='$sem')) or (`receivers`='students(all)' and (`branch`='$branch' or `branch`='all')) or (`receivers`='college')) and `id`='$id_teacher'");
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
                <h5><?php echo strtoupper($course_name_val);?></h5>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      

                      <div class="clearfix"></div>

                      <div class="col-md-5 col-sm-5 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>Faculty</i></h4>
                            <div class="left col-xs-7">
                              <h2><?php echo $name;?></h2>
                              <p><strong><i class="fas fa-"><?php echo $designation; ?></i> </strong>  </p>
                              <ul class="list-unstyled">
                                
                                <li><i class="fa fa-envelope"></i> <?php echo $email;?> </li>
                                <br>
                                <li><button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                              </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/img.jpg" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          
                        </div>
                      </div>

                      <!-- IA marks -->
            
              <div class="col-md-7 col-sm-12 col-xs-12">
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
                          <th>IA1</th>
                          <th>IA2</th>
                          <th>IA3</th>
                          <th>AVG</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                        <tr>
                          <tH>MARKS</th>
                        <td><?php echo $ia1_fetch['course6'];?></td>
                        <td><?php echo $ia2_fetch['course6'];?></td>
                        <td><?php echo $ia3_fetch['course6'];?></td>
                        <td><?php echo best_avg($ia1_fetch['course6'],$ia2_fetch['course6'],$ia3_fetch['course6']);?></td>
                       </tr>
                          

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      <div class="x_content">
                    <br />
                    <div class="col-md-5 col-sm-12 col-xs-12">
                       <div class="x_panel">
                    <h2>Contact Teacher</h2>
                    <form action="share_upload.php" method="post" enctype="multipart/form-data"  class="form-horizontal form-label-left" id="demo-form" data-parsley-validate>

                    
                       <div class="form-group">
                  
                        <div class="col-md-12 col-sm-12  col-xs-12">
                          <select class="form-control" name="sem">
                            
                            <option value="assignment">Assignment</option>
                             <option value="doubt">Doubt</option>
                            <option value="general">General</option>
                          
                          </select>
                        </div>
                      </div>
                        <div class="form-group">
                      
                        <div class="col-md-12 col-sm-12  col-xs-12">
                          <input type="text" name="subject" class="form-control" placeholder="subject">
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                    
                        <div class="col-md-12 col-sm-12  col-xs-12">
                          <textarea class="form-control" name="message" rows="3" placeholder="MESSAGE"></textarea>
                        </div>
                      </div>
                   
                      
                     <?php echo '<input type="hidden" name="teacher_id" value="'.$id_teacher.'">';?>
                      <?php echo '<input type="hidden" name="course_code" value="'.$courses_array[2].'">';?>
                      
                          <div class="form-group">
                        
                        <div class="col-md-12 col-sm-12  col-xs-12">
                      <input type="file" data-role="magic-overlay" name="file" data-target="#pictureBtn" data-edit="insertImage" />*pdf is accepted for assignments.
                    </div>
          
      </div>

                      <div class="form-group">
                        <div class="col-md-12 col-sm-12  col-xs-12 col-md-offset-1">
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" name="submit" class="btn btn-success">Upload</button>
                        </div>
                      </div>

                    </form>
                    
                  </div>
                   <div>
                   </div>
                   </div>

  <div class="col-md-7 col-sm-12 col-xs-12">
     <div class="x_panel">
                   <h2> <?php $name ?> shared</h2>                           
                           
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
                           echo '<p> No Shares till Now . </p>';


                        }
                        ?>
                           </div>
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