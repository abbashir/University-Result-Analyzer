<?php require_once("connection.php"); ?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>vu result analysis</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->

    <link href="assets/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet" type="text/css" href="assets/social-icon.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
    .skin-blue .main-header .navbar {
    background-color: #343A40;
}
  </style>

<!-- javascript for bar chart -->

<!-- Single Series Column Chart -->
<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {

      title:{
        text: "Fruits sold in First Quarter"              
      },
      data: [//array of dataSeries              
        { //dataSeries object

         /*** Change type "column" to "bar", "area", "line" or "pie"***/
         type: "column",
         dataPoints: [
         { label: "banana", y: 18 },
         { label: "orange", y: 29 },
         { label: "apple", y: 40 },                                    
         { label: "mango", y: 34 },
         { label: "grape", y: 24 }
         ]
       }
       ]
     });

    chart.render();
  }
  </script>


  <script src="assets/plot.js"></script>

    
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The University <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Overview</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> New Task</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Categories</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Übersicht</a></li>
            <li><a href="#">New Contact</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Categories</a></li>
          </ul>
        </li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admission <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Overview</a></li>
            <li><a href="#">New Notiz</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Notebooks</a></li>
          </ul>
      </li>
      
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Academic <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Overview</a></li>
            <li><a href="#">New Learning</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Categories</a></li>
          </ul>
      </li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Faculty <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Overview</a></li>
            <li><a href="#">New Entry</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Topics</a></li>
          </ul>
      </li>
      <li><a href="">Library</a></li>
      <li><a href="">Career</a></li>
      <li><a href="">Contacts</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> Links<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://www.google.ch" target="_blank">My Webmail</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="http://www.google.ch" target="_blank">Timelogger</a></li>
            <li><a href="http://www.cubetech.ch" target="_blank">cubetech.ch</a></li>
         </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> user area<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://www.fgruber.ch/" target="_blank"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> User Settings</a></li>
            <li><a href="/logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
         </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->

  <div class="content-wrapper">
    <br>
    <div class="container-fluid">
     
     
<div class="row">
<div class="col-md-3">  <!-- side bar -->
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
           <!--  <div class="widget-user-header bg-blue">
            
              <h6 class="widget-user-username">Menu</h6>
              <span class="widget-user-username">Menu</span>
            </div> -->
            <span class="list-group-item text-center" style="background: #1C2A48; color: white; font-size: 20px;">Menu</span>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="index.php">Semester wise Analysis</a></li>
                <li><a href="department.php">Department wise Analysis</a></li>
                 <li><a href="ranklist.php">Rank List</a></li>

                <li><a href="subject.php">Subject wise Analysis</a></li>

               <li><a href="overall.php">Overall result analysis </a></li>
              </ul>
            </div>
          </div>
        </div>


<div class="col-md-9">

         <div class="callout callout-success text-center">
                <span style="font-size: 25px;">Rank List</span>
                
              </div>





  <form method="post" action="">

      <div class="col-md-3"> <!-- select option for dept -->
        <div class="form-group">
                <select class="form-control select2" required="required" name="department" style="width: 100%;">
                  <option selected="selected" value="">Department</option>
                  <option value="CSE">CSE</option>
          
                </select>
              </div>
      </div>
 <div class="col-md-3"> <!-- select option for batch -->
         <div class="form-group">
                <select class="form-control select2" required="required" name="batch" style="width: 100%;">
                  <option selected="selected" value="">Batch</option>
                 
                  <option value="11">11th</option>
                  <option value="12">12th</option>
                </select>
              </div>
      </div>
 <div class="col-md-3"> <!-- select option for semester -->
        <div class="form-group">
                <select class="form-control select2" name="semester" style="width: 100%;" required="required">
                  <option selected="selected" value="">Semester</option>
                
                
                  <option value="4">4th</option>
                 
                </select>
              </div>
      </div>
<div class="col-md-3"> <!-- button -->
     <button type="submit" name="result" class="btn btn-block btn-success btn-flat">Show</button> 
    </div> 
    </form>

</div>
  </div> <!-- end row -->
    </div>  <!-- /.container -->
   
<div class="container">

  <?php 
  if (isset($_POST['result'])) {

    //condition for department
$dept = $_POST['department'];
   


  //condition for Semester
$sem = $_POST['semester'];
 
 

 //condition for Batch
   $batch = $_POST['batch'];
  
//dept,batch,sem ,cal end

/********************
Total Student Count
*********************/
  $total=0;
 

         $sql = "SELECT * FROM `student_data` 
  WHERE dept = '$dept' AND batch = '$batch' AND semester = '$sem' ORDER BY gpa DESC";

      $sql_run = mysqli_query($con,$sql);
      if (! $sql_run) {
        echo "Error:".mysqli_error($con);
      } else {
       while ($row = mysqli_fetch_array($sql_run)) {
       
         
          $total= $total+1;
           

       }
      }
      //echo "<br>total Student =$total";

//rank

      echo '
<div class="col-md-12">


          <div class="box">
            <div class="box-header text-center">
            <span class="pull-left badge bg-light-blue">Batch : '.$batch.'</span>

            <span class="pull-right badge bg-light-blue">Semester : '.$sem.'</span>

              <h3 class="box-title">Rank List Within '.$total.' Students</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered">
                <tbody>
                    <tr>
                      
                  <th>ID</th>
                  
                  <th>GPA</th>
                  <th>Rank</th>
                </tr>
      ';
      

         $sql = "SELECT * FROM `student_data` 
  WHERE dept = '$dept' AND batch = '$batch' AND semester = '$sem' ORDER BY gpa DESC";

  $rank = 0;
  $gpa = 420;

      $sql_run = mysqli_query($con,$sql);
      if (! $sql_run) {
        echo "Error:".mysqli_error($con);
      } else {
       while ($row = mysqli_fetch_array($sql_run)) {
      //rank measure
        if ( $gpa == $row['gpa']) {
            $rank = $rank;
          } else {
           $rank = $rank +1;
          }
           $gpa = $row['gpa'];

         echo '

                 <tr>
                  <td>'.$row['studentid'].'</td>
                  <td>'.$row['gpa'].'</td>
                 <td>'.$rank.'</td>
                </tr>

          
';
       }
      }

echo '
    
              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>


';

      }
   ?>


   </div>
   


  </div> <!-- container end -->


  </div>
  <!-- content-wrapper -->


<!-- Footer-->
<footer style="background: #2A2730; color: white;" class="container-fluid">
    <div class="footer">
        <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    
                   
                    <ul class="">
                        <br>   <br>
                      <img style="margin-left: 25px;" src="assets/img/logo.png" class="img-responsive img-rounded" alt="logo"> 
                      <h4> Varendra University </h4>  
                  
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h3 class="text-center"> Manu </h3>
                    <hr>
                    <ul class="text-center">
                         <h4> Home <h4> 
                         <h4> Administrative <h4> 
                         <h4> Course Work <h4> 
                         <h4> Course Seminar <h4> 
                            <h4> Course Work <h4> 
                         <h4> Course Seminar <h4> 

                    </ul>
                </div>
                <div class="col-lg-3  col-md-4 col-sm-4 col-xs-12">
                    <h3 class="text-center">Social media </h3>
                    <hr>
                    
                    <ul class="social-network social-circle text-center">
                        
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>

                        <li><a  href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>

                    </ul> 
                    
                </div>
                <div class="col-lg-3  col-md-4 col-sm-4 col-xs-12">
                    <h3 class="text-center"> CONTACT US </h3>
                    <hr>
                    <ul class="text-center" style="font-size: 15px;">
                        Registrar<br>
529/1, Kazla, Motihar, Rajshahi<br>
+880721-751274,+880721-751459<br>
info@vu.edu.bd<br>
facebook.com/vu.edu<br>
Email - registrar@ru.ac.bd<br>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>


<!-- chart -->
<script src="assets/canvas.js"></script>




</body>
</html>
