<?php
include('include/connect.php');
if( !isset($_SESSION['usn']) )
{
header('location:index.php');
}

session_start();

//course name fetch
// run query
$course_fetch = mysqli_query($conn,"SELECT * FROM `course` where `branch`='$branch' and `sem`='$sem'");


// set array
$courses_array=mysqli_fetch_row($course_fetch);
 
$ia1=mysqli_query($conn,"SELECT * from `ia1` where `usn`='$id' ");
$ia1_fetch=mysqli_fetch_assoc($ia1);
$ia2=mysqli_query($conn,"SELECT * from `ia2` where `usn`='$id' ");
$ia2_fetch=mysqli_fetch_assoc($ia2); 
$ia3=mysqli_query($conn,"SELECT * from `ia3` where `usn`='$id' ");
$ia3_fetch=mysqli_fetch_assoc($ia3);  



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
                <img src="images/prof.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info"> 
                <span><?php echo $id;?></span>
                <h2><?php echo $name; $i=2 ; echo $courses_name_array[2]; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

           

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a href="home.php"><i class="fa fa-home"></i> Home </a></li>
                 <!-- <li><a href="profile.php"><i class="fa fa-user"></i> Profile </a></li> -->

                  <li><a><i class="fa fa-graduation-cap"></i> Courses<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <?php 
                     $j=1;

                     for($i=2;$i<10;$i++)
                     {
                      $course_name_fetch = mysqli_query($conn,"SELECT `sub_name` FROM `course_name` where `sub_code` = '$courses_array[$i]' ");
                      $course_name_fetched=mysqli_fetch_assoc($course_name_fetch);
                      $course_name_val=$course_name_fetched['sub_name'];
                                           echo '<li><a href="course'.$j.'.php">'.$course_name_val."(".$courses_array[$i].")".'</a></li>';
                                           $j++;
                     }



                     ?>
                    </ul>
                  </li>
                  <li><a href="share.php"><i class="fa fa-share-alt"></i> Share is Care </a></li>
                   <li><a href="received.php"><i class="fa fa-share-alt"></i> Received Items </a></li>
                    <li><a href="online_exam.php"><i class="fa fa-share-alt"></i> Online Exam </a></li>
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
                    <img src="images/prof.png" alt="">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                
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
                        <span class="image"><img src="images/prof.png" alt="Profile Image" /></span>
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
