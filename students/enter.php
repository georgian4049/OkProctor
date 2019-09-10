<?php
include('include/connect.php');
include('include/head.php');

if(isset($_POST['submit']))
{  
	$a=mysqli_query($conn,"INSERT INTO course VALUES('ISE')");
}



?>
<div class="right_col" role="main">
          <div class="">
          

<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Enter sem and branch and subjects<small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" name="submit" method="post" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SEM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="sem" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!--
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Branch <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="branch" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course1 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="course_code1" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="course_name1" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course2 <span class="required">*</span>
                        </label>
                       <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="course_code2" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="course_name2" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>                      
                    </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course3 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="course_code3" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="course_name3" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                    	</div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course4 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="course_code4" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="course_name4" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course5 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="course_code5" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="course_name5" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course6 <span class="required">*</span>
                        </label>
                       <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="course_code6" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="course_name6" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course7 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="course_code7" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="course_name7" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course8 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="course_code8" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="course_name8" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
						-->
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <input type="submit" name="submit" id="submit" value="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

</div>
</div>

<?php
include('include/footer.php');
?>