<?php
include('include/connect.php');
if( !isset($_SESSION['id']) )
{
header('location:index.php');
}
session_start();

//course name fetch
// run query
$co=mysqli_query($conn,"SELECT `sub_name` from `course_name` where `sub_code`='$co1' ");
$co1_val=mysqli_fetch_assoc($co);
$co1_name=$co1_val['sub_name'];
$coo=mysqli_query($conn,"SELECT `sub_name` from `course_name` where `sub_code`='$co2' ");
$co2_val=mysqli_fetch_assoc($coo);
$co2_name=$co2_val['sub_name'];
$cooo=mysqli_query($conn,"SELECT `sub_name` from `course_name` where `sub_code`='$co3' ");
$co3_val=mysqli_fetch_assoc($cooo);
$co3_name=$co3_val['sub_name'];


$course=array();
$course[0]=$co1;
$course[1]=$co2;
$course[2]=$co3;
$course_name=array();
$course_name[0]=$co1_name;
$course_name[1]=$co2_name;
$course_name[2]=$co3_name;

// set array
$courses_array=mysqli_fetch_row($course_fetch);


function sem_separator($val)
{
 

  preg_match_all('/([0-9]+|[a-zA-Z]+[0-9])/',$val,$matches);
return($matches[0][0][]);
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

//share fetch starts here


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/teacher2.png" type="image/ico" />

    <title>OKPROCTOR </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!--data tables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-university"></i> <span>MVJCE</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/prof.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info"> 
                <span><?php echo $id;?></span>
                <h2><?php echo $name; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

           

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a  href="home.php"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="profile.php"><i class="fa fa-user"></i> Profile </a></li>
                  <li><a><i class="fa fa-graduation-cap"></i> Courses<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
<?php
for($i=0;$i<3;$i++){
                echo  ' 
                    

                      <li><a href="course.php?'.$course[$i].'"><i class="fa fa-book"></i>'.$course_name[$i].'('.$course[$i].')' ;?> </a></li>
                    

                     
                    </ul>
                  </li>
                  ';
              }
                  ?>
                  <li><a href="share.php"><i class="fa fa-share-alt"></i> Share is Care </a></li>
                  <li><a href="received.php"><i class="fa fa-share-alt"></i> Received </a></li>
                </ul>

              </div>
             
            </div>
            <!-- /sidebar menu --> 
            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu ">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/prof.jpg" alt="">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/prof.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>user1</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          messages
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/prof.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>user2</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          messages
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/prof.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>user3</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          messages
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/prof.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>user4</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          messages
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
