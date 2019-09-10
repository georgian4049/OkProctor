<?php
include('include/connect.php');
include('include/head.php');

$fetching_all_shares=mysqli_query($conn,"SELECT * from `share` where `id`='$id'");
$num=mysqli_num_rows($fetching_all_shares);
$topic_fetched=array();
$description_fetched=array();
$file_fetched=array();
$date_fetched=array();
$receivers_fetched=array();

while($fetching_all_shares_row=mysqli_fetch_array($fetching_all_shares))
{

$topic_fetched[]=$fetching_all_shares_row['topic'];
$description_fetched[]=$fetching_all_shares_row['description'];
$material_fetched[]=$fetching_all_shares_row['material'];
$date_fetched[]=$fetching_all_shares_row['date'];

$sem_fetched[]=$fetching_all_shares_row['sem'];


$receivers_fetched[]=$fetching_all_shares_row['receivers'];

}


?>


  <div class="right_col" role="main">
          <div class="">
            <div class="row">
      <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SHARE<?php echo $count;?><small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="share_upload.php" method="post" enctype="multipart/form-data"  class="form-horizontal form-label-left" id="demo-form" data-parsley-validate>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">TOPIC</label>
                        <div class="col-md-6 col-sm-6  col-xs-12">
                          <input type="text" name="topic" class="form-control" placeholder="TOPIC">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">DESCRIPTION <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6  col-xs-12">
                          <textarea class="form-control" name="description" rows="3" placeholder="DESCRIPTION"></textarea>
                        </div>
                      </div>
                   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">FOR</label>
                        <div class="col-md-6 col-sm-6  col-xs-12">
                          <select class="form-control" name="receivers">
                            
                            <option value="college">COLLEGE</option>
                            <option value="branch">BRANCH</option>
                            <option value="hod">HOD</option>
                            <option value="faculty(all)">FACULTY(ALL)</option>
                            <option value="faculty(branch)">FACULTY(BRANCH)</option>
                            <option value="students(all)">STUDENTS(ALL)</option>
                            <option value="students(branch)">STUDENTS(BRANCH)</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">SEMESTER</label>
                        <div class="col-md-6 col-sm-6  col-xs-12">
                          <select class="form-control" name="sem">
                            
                            <option value="all">ALL</option>
                            <option value="1">1</option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="7">7</option>
                          </select>
                        </div>
                      </div>
                      
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">UPLOAD</label>
                        <div class="col-md-6 col-sm-6  col-xs-12">
                      <input type="file" data-role="magic-overlay" name="file" data-target="#pictureBtn" data-edit="insertImage" />
                    </div>
          
      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6  col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" name="submit" class="btn btn-success">Upload</button>
                        </div>
                      </div>

                    </form>
                    
                  </div>
                </div>
              </div>
          </div>




                <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>UPLOAD HISTORY</h2><small></small>
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
<?php   if($num!=0){
                       echo  '

                        <ul class="messages">
                          <li>
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h6 class="date text-info">'.$date_fetched[$num-1].'</h3>
                             
                              
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">'.$topic_fetched[$num-1].'</h4>
                              <blockquote class="message">'.$description_fetched[$num-1].'</blockquote>
                              <br />
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="../upload/'.$material_fetched[$num-1].'" target="blank"><i class="fa fa-paperclip"></i> '.$material_fetched[$num-1].' </a></p>
                                 <p class="month"><font color="green">LAST UPLOAD <font color="blue" style="padding-left:20px;">Shared with '." ".$receivers_fetched[$num-1]." ".$sem_fetched[$i].' sem</font></p>
                            </div> 
                          </li>
                          </ul>
</div> ';} ?>
                        <!-- end of user messages -->
                                               
                           
                        <?php   
                        if($num!=0){

                        for($i=$num-2;$i>=0;$i--){

                        echo '
                       
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <ul class="messages">
                          <li>
                            <img src="images/img.jpg" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h6 class="date text-info">'.$date_fetched[$i].'</h3>
                              
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">'.$topic_fetched[$i].'</h4>
                              <blockquote class="message">'.$description_fetched[$i].'</blockquote>
                              <br />
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="upload/'.$material_fetched[$i].'" target="blank"><i class="fa fa-paperclip"></i> '.$material_fetched[$i].' </a>
                                 <p><font color="blue">Shared with ('."".$receivers_fetched[$i].' )</font></p>
                              </p>
                            </div>
                          </li>
                          </ul>
                          </div>
                        
                         ';
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
                      


                    <!-- start project-detail sidebar -->
                    
                    <!-- end project-detail sidebar -->

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