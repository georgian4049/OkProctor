
<?php
include('include/connect.php');
include('include/head.php');

 //


if(isset($_POST['stud_del']))
{
  $usn=$_POST['usn'];
  
  $delete_students=mysqli_query($conn,"DELETE from `student` where `usn`='$usn'");  
}
if(isset($_POST['teach_del']))
{
  $id=$_POST['id'];
  
  $delete_teachers=mysqli_query($conn," DELETE FROM `teachers` where `id`='$id'");  
}



?>



<div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DELETE USERS <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        
                      </li>
                      
     
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                
                  <div class="x_content">
                   
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">STUDENTS</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                        <form id="demo-form2" method="post" me data-parsley-validate class="form-horizontal form-label-left">
                       <div class="form-group">
                       
                          <p><strong>DELETE STUDENTS</strong>
                            </p>

                      
                      </div>
                                             

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">USN <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first_name" name="usn" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                                        <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="stud_del" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>


                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">TEACHERS</h4>
                        </a>


                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                         
                            <form id="demo-form3" data-parsley-validate class="form-horizontal form-label-left" method="post" action="">
                       <div class="form-group">
                       
                             <p><strong>DELETE TEACHERS</strong>
                            </p>

                       
                      </div>
                                             
<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first_name" name="id" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      



                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                        
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="teach_del" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>


                          </div>
                        </div>
                      </div>
                  
                  </div>
                </div>
              </div>
            </div>
                      <div class="x_content">


                     
                      </div>
                    </div>

            

        <?php
include('include/footer.php');
?>