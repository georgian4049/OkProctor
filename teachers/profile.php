<?php
include('include/connect.php');
include('include/head.php');

if(isset($_POST['submit']))
{
  $old=$_POST['old'];
  $new=$_POST['new'];
  $re=$_POST['re'];
  if($old!=$pass)
  {
     $error_wrong_pwd="enter correct password";
       header('location:profile.php');
  }
 elseif($new!=$re)
  {
   
    $error_re="Re-enter same password";
       header('location:profile.php');
  }
  else
  {
  $upd=mysqli_query($conn,"UPDATE `teachers` set `pwd`='$new' where `id`='$id' ");
  $success="password successfully updated";
   header('location:profile.php');

  }

}
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profile</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/prof.png" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php echo $name;?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $location;?> Bangalore, INDIA
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $designation ; ?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-envelope"></i>
                        <?php echo '<a href="'.$email.'" target="blank">'.$email.'</a>'; ?> 
                        </li>
                         <li>
                          <i class="fa fa-graduation-cap"></i>joined on: <?php echo $doj ; ?>
                        </li>
                         <li>
                          <i class="fa fa-book"></i> <?php echo $co1 ; ?>
                        </li>
                         <li>
                          <i class="fa fa-book"></i> <?php echo $co2 ; ?>
                        </li>
                        <li>
                          <i class="fa fa-book"></i> <?php echo $lab ; ?>
                        </li>
                         <li>
                          <i class="fa fa-building-o"></i> <?php echo $branch ; ?>
                        </li>
                         <li>
                          <i class="fa fa-genderless"></i> <?php echo $gender ; ?>
                        </li>


                      </ul>

                     

                      <!-- start skills -->
                     
                      <!-- end of skills -->

                    </div>
                   
                   <div class="col-md-9 col-sm-9 col-xs-12 ">
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">UPDATE</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="">
                       <div class="form-group">
                       
                         
                      
                      </div>
                                             

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">OLD PASSWORD <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="old" name="old" required="required" class="form-control col-md-7 col-xs-12"><font color="red"><?php echo $error_wrong_pwd; ?></font>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NEW PASSWORD <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="new" name="new" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">RETYPE PASSWORD <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="re" name="re" required="required" class="form-control col-md-7 col-xs-12"><font color="red"><?php echo $error_re; ?></font>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                          
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-edit m-right-xs">Edit Profile</i></button><font color="green"><?php echo $success; ?></font>
                        </div>
                      </div>
                    </form>


                          </div>
                        </div>
                      </div>
                  </div>
                      <!-- start of user-activity-graph -->
                      
                      <!-- end of user-activity-graph -->

                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <!-- end user projects -->

                          </div>
                          
                        </div>
                      </div>
                    </div>
                    
                            <!-- end user projects -->

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



<?php

include('include/footer.php');
?>