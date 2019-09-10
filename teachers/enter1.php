<?php
include('include/connect.php');
include('include/head.php');

?>
<div class="right_col" role="main">
          <div class="">
          

<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Enter sem and branch and subjects <small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="submit" method="post" action="form_insert.php" data-parsley-validate class="form-horizontal form-label-left" >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SEM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="1" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Branch <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!--
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course1 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="3" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="4" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course2 <span class="required">*</span>
                        </label>
                       <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="5" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="6" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>                      
                    </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course3 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="7" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="8" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                    	</div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course4 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="9" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="10" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course5 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="11" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="12" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course6 <span class="required">*</span>
                        </label>
                       <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="13" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="14" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course7 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="15" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="16" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Course8 <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="text" id="17" required="required" placeholder="code" class="form-control col-md-7 col-xs-12">
                        </div>
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="18" required="required" placeholder="course name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>
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