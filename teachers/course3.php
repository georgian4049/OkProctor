<?php
include('include/connect.php');
include('include/head.php');

$sem_for_lab=sem_separator($lab_code);
$stud1=mysqli_query($conn,"SELECT * from `student` where `branch`='$branch' and `sem`='$sem_for_lab'");
$usn=array();
$name=array();
$ia1=array();
$ia2=array();
$ia3=array();
$sub_no=substr($lab_code,-1);
$avg=array();
$attendance=array();
while($row=mysqli_fetch_assoc($stud1))
{
   $usn[]=$row['usn'];
   $name[]=$row['first_name'].' '.$row['last_name'];
}
$total_students=count($usn);
$course="course".$sub_no;
for($i=0;$i<$total_students;$i++)
{
  $ia1_fetch=mysqli_query($conn,"SELECT * from `ia1` where `usn`='$usn[$i]'");
  $ia1_row=mysqli_fetch_assoc($ia1_fetch);
$ia1[$i]=$ia1_row[$course];
$ia2_fetch=mysqli_query($conn,"SELECT * from `ia2` where `usn`='$usn[$i]'");
  $ia2_row=mysqli_fetch_assoc($ia2_fetch);
$ia2[$i]=$ia2_row[$course];
$ia3_fetch=mysqli_query($conn,"SELECT * from `ia3` where `usn`='$usn[$i]'");
  $ia3_row=mysqli_fetch_assoc($ia3_fetch);
$ia3[$i]=$ia3_row[$course];
$avg[$i]=best_avg($ia1[$i],$ia2[$i],$ia3[$i]);


// fetching student attendance

 $attend_fetch=mysqli_query($conn,"SELECT * from `stud_attend` where `usn`='$usn[$i]'");
  $attend_row=mysqli_fetch_assoc($attend_fetch);
$attendance[$i]=$attend_row[$course];
}

mysqli_close($conn);

?>
<script type="text/javascript">
  function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>

        <!-- page content -->
         <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> <small></small></h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Students<small>info</small></h2>
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

<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel">
                        <a class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4 class="panel-title">update</h4>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>USN</th>
                          <th>NAME </th>
                          <th>IA-1</th>
                          <th>IA-2</th>
                          <th>IA-3</th>
                          <th>AVG</th>
                          
                        </tr>
                      </thead>


                      <tbody>

                        <?php
                            for($i=0;$i<count($usn);$i++)
                            {
                              echo '
                                      
                                      <tr><td>'.$usn[$i].'</td>
                                      <td><a href="student.php?'.$usn[$i].'">'.$name[$i].'</a></td>
                                      <td><form method="get" action="stud_marks_update.php">
                                      <input type="hidden" value="'.$usn[$i].'" name="usn">
                                      <input type="hidden" value="'.$course.'" name="course">
                                      <input type="hidden" value="ia1" name="ia">
                                        


                                       <input type="text" name="marks" style="width:30px;" placeholder="'.$ia1[$i].'">

                                        <button type="submit" name="update"><i class="fa fa-check"></i> </button></form></td>

                                        <td>
                                        <form method="get" action="stud_marks_update.php">
                                         <input type="hidden" value="'.$usn[$i].'" name="usn">
                                      <input type="hidden" value="'.$course.'" name="course">
                                      <input type="hidden" value="ia2" name="ia">
                                         <input type="text" name="marks" style="width:30px;" placeholder="'.$ia2[$i].'">
                                          <button type="submit" name="update"><i class="fa fa-check"></i> </button>
                                         </form>
                                         </td>
                                          <td> 
                                          <form method="get" action="stud_marks_update.php">
                                           <input type="hidden" value="'.$usn[$i].'" name="usn">
                                      <input type="hidden" value="'.$course.'" name="course">
                                      <input type="hidden" value="ia3" name="ia">
                                          <input type="text" name="marks" style="width:30px;" placeholder="'.$ia3[$i].'">
                                           <button type="submit" name="update"><i class="fa fa-check"></i> </button>

                                          </form>
                                          </td>
                                         </form>
                                         <td>'.$avg[$i].'</td>



                              ';
                            }


                        ?>
                      </tbody>
                    </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title">Students Attendance</h4>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                            <p><strong>Students Attendance</strong>
                            </p>
                           <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>USN</th>
                          <th> NAME</th>
                          <th>ATTENDANCE</th>
                        </tr>
                       
                        <?php
                        for($i=0;$i<count($usn);$i++) 
                        {
                             echo ' <tr>

                              <td>'.$usn[$i].'</td>

                              <td>'.$name[$i].'</td>
                              <td>'.$attendance[$i].'</td></tr>' ;


                        }


                        ?>



                   
                      </tbody>
                    </table>
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->



<?php
include('include/footer.php');
?>