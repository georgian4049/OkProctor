
<?php
include('include/connect.php');
include('include/head.php');

 // function to convert string and print 
    function convertString ($date) 
    { 
        // convert date and time to seconds 
        $sec = strtotime($date); 
  
        // convert seconds into a specific format 
        $date = date("Y-m-d H:i", $sec); 
  
        // append seconds to the date and time 
        $date = $date . ":00"; 
  
        // print final date and time 
        return $date; 
    } 


if(isset($_POST['stud_sub']))
{
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $usn=$_POST['usn'];
  $pwd=$_POST['pass'];
  $gender=$_POST['gender'];
  $dob=convertString($_POST['dob']);
  $branch=$_POST['branch'];
  $sem=$_POST['sem'];
  $parent_name=$_POST['parents_name'];
  $parent_contact=$_POST['parents_contact'];
  $address=$_POST['address'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
   $yoa=$_POST['yoa'];
  $scheme=$_POST['scheme'];
  $insert_students=mysqli_query($conn,"INSERT INTO `student`(`usn`,`password`,`first_name`,`last_name`,`email`,`sem`,`branch`,`gender`,`parents_name`,`parents_contact`,`address`,`contact`,`dob`,`scheme`,`yoa`) values ('$usn','$pwd','$first_name','$last_name','$email','$sem','$branch','$gender','$parent_name','$parent_contact','$address','$contact','$dob','$scheme','$yoa')"); 
}
if(isset($_POST['teach_submit']))
{
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $id=$_POST['id'];
  $pwd=$_POST['pass'];
  $gender=$_POST['gender'];
  $dob=convertString($_POST['dob']);
  $branch=$_POST['branch'];
  $co1=$_POST['co1'];
  $co2=$_POST['co2'];
  $lab=$_POST['lab'];
  $position=$_POST['position'];
  $designation=$_POST['designation'];
  $address=$_POST['address'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $doj=convertString($_POST['doj']);
  $insert_teachers=mysqli_query($conn,"INSERT INTO `teachers`(`id`,`pwd`,`first_name`,`last_name`,`dob`,`branch`,`position`,`co1`,`co2`,`lab`,`email`,`contact`,`designation`,`gender`,`date_of_joining`,`address`) values ('$id','$pwd','$first_name','$last_name','$dob','$branch','$position','$co1','$co2','$lab','$email','$contact','$designation','$gender','$doj','$address')");  
}



?>



<div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ADD USERS <small></small></h2>
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
                       
                          <p><strong>ADD STUDENTS</strong>
                            </p>

                      
                      </div>
                                             

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first_name" name="first_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last_name" name="last_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">USN <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="usn" required="required" name="usn"  placeholder="usn" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">PASSWORD <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="pass" name="pass" placeholder="password" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="email" name="email" placeholder="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         M:
                        <input type="radio" class="flat" name="gender" id="genderM" value="Male" checked="" required /> F:
                        <input type="radio" class="flat" name="gender" id="genderF" value="Female" />
                      </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">DOB <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class='input-group date' id='myDatepicker2'>
                            <input type='text' name="dob" class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                     
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">BRANCH <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="heard" name="branch" class="form-control" required>
                            <option value="ise">ISE</option>
                            <option value="cse">CSE</option>
                            <option value="me">ME</option>
                            <option value="civ">CIV</option>
                            <option value="ec">EC</option>
                            <option value="ar">AR</option>
                            <option value="eee">EEE</option>
                            <option value="te">TE</option>
                          </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">SEM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="heard" name="sem" class="form-control" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                          </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">PARENT'S NAME <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="parents_name" required="required" name="parents_name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">PARENT'S CONTACT <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="parents_contact" required="required" name="parents_contact" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">STUDENT'S CONTACT <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="student-contact" required="required" name="student-contact" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                         
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">ADDRESS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="address" required="required" name="address" class="form-control col-md-7 col-xs-12">
                          </textarea>
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">SCHEME<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id=designation" required="required" name="scheme" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">YEAR OF ADMISSION <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id=designation" required="required" name="yoa" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="stud_sub" class="btn btn-success">Submit</button>
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
                       
                             <p><strong>ADD TEACHERS</strong>
                            </p>

                       
                      </div>
                                             
<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first_name" name="first_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last_name" name="last_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="usn" required="required" name="id" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">PASSWORD <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="pass" name="pass" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         M:
                        <input type="radio" class="flat" name="gender" id="genderM" value="Male" checked="" required /> F:
                        <input type="radio" class="flat" name="gender" id="genderF" value="Female" />
                      </div>
                    </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">DOB <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class='input-group date' id='myDatepicker2'>
                            <input type='text' name="dob" class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">Date Of Joining <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class='input-group date' id='myDatepicker2'>
                            <input type='text' name="doj" class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">BRANCH <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="heard" name="branch" class="form-control" required>
                            <option value="ise">ISE</option>
                            <option value="cse">CSE</option>
                            <option value="me">ME</option>
                            <option value="civ">CIV</option>
                            <option value="ec">EC</option>
                            <option value="ar">AR</option>
                            <option value="eee">EEE</option>
                            <option value="te">TE</option>
                          </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">CO1 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="co1" required="required" name="co1" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">CO2 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="co2" required="required" name="co2" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">LAB <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="lab" required="required" name="lab" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for=position">POSITION <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="position" required="required" name="position" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       
                       
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">DESIGNATION <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id=designation" required="required" name="designation" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">ADDRESS <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="address" required="required" name="address" class="form-control col-md-7 col-xs-12">
                          </textarea>
                        </div>
                      </div>
                    
                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="teach_submit" class="btn btn-success">Submit</button>
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