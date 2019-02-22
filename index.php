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
<div class="row">
   <div class="col-md-5">
    <a href="index.php">
   <img src="img/logo.png" class="img-responsive" style="padding: 20px;">
 </a>
 </div>
  <div class="col-md-5">
    <h2 style="padding-bottom: 20px; color: #C44D2D;">Result Analysis And Make Result Paper </h2> 
    <h4> 
      <span class="glyphicon glyphicon-phone-alt"></span>(+880721)751274 
      <span class="glyphicon glyphicon-phone-alt"></span>   
    (+880721)751459    
    <span class="glyphicon glyphicon-phone-alt"></span>
  +8801730406501-4</h4>


  </div>
   <div class="col-md-2">
    <a href="#">
   <img src="img/suggestion-complaint1.png" class="img-responsive" style="padding: 20px;">
   </a>
    <?php
  if(loggedin())
  {
     echo '<img src="img/'."$_SESSION[photo]".'" width="25" height="25">';
     echo " Hello <span style=\"color: #79B021;\"> $_SESSION[name] !!</span>";
   
  }
  ?>

  </div>

</div>
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
            <li><a href="login.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Login</a></li>
          <?php 
            if (loggedin()) {
              echo '  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>';
            }
           ?>
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
                <span style="font-size: 25px;">Semester wise Analysis</span>
                
              </div>





  <form method="post" action="">

      <div class="col-md-3"> <!-- select option for dept -->
        <div class="form-group">
                <select class="form-control select2" required="required" name="department" style="width: 100%;">
                  <option selected="selected" value="">Department</option>
                  <option value="CSE">CSE</option>
                  <!-- <option value="EEE">EEE</option>
                  <option value="BBA">BBA</option>
                  <option value="PHARMACY">PHARMACY</option>
                  <option value="ENGLISH">ENGLISH</option>
                  -->
                </select>
              </div>
      </div>
 <div class="col-md-3"> <!-- select option for batch -->
         <div class="form-group">
                <select class="form-control select2" required="required" name="batch" style="width: 100%;">
                  <option selected="selected" value="">Batch</option>
                 
                  <option value="7">7th</option>
               
                </select>
              </div>
      </div>
 <div class="col-md-3"> <!-- select option for semester -->
        <div class="form-group">
                <select class="form-control select2"  name="semester" style="width: 100%;" required="required">
                  <option selected="selected" value="">Semester</option>
                 
                  <option value="9">9th</option>
                 
                 
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


 
   

/********************
Total Student Count
*********************/
  $total=0;
      $sql = "SELECT * FROM `student_data` 
  WHERE dept = '$dept' AND batch = '$batch' AND semester = '$sem'";

      $sql_run = mysqli_query($con,$sql);
      if (! $sql_run) {
        echo "Error:".mysqli_error($con);
      } else {
       while ($row = mysqli_fetch_array($sql_run)) {
        $total = $total +1;
       }
      }
      //echo "<br>total=$total";



/********************
Passed Count WHERE earn credit > 50% of total credit 
*********************/
  $passed=0;
      $sql = "SELECT * FROM `student_data` 
  WHERE dept = '$dept' AND batch = '$batch' AND semester = '$sem' AND earncredit > (totalcredit/2)";

      $sql_run = mysqli_query($con,$sql);
      if (! $sql_run) {
        echo "Error:".mysqli_error($con);
      } else {
       while ($row = mysqli_fetch_array($sql_run)) {
        $passed = $passed +1;
       }
      }
        //echo "<br>passed=$passed";


/********************
failed Count WHERE earn credit < 50% of total credit 
*********************/
  $failed=0;
      $sql = "SELECT * FROM `student_data` 
  WHERE dept = '$dept' AND batch = '$batch' AND semester = '$sem' AND earncredit < (totalcredit/2)";

      $sql_run = mysqli_query($con,$sql);
      if (! $sql_run) {
        echo "Error:".mysqli_error($con);
      } else {
       while ($row = mysqli_fetch_array($sql_run)) {
        $failed = $failed +1;
       }
      }
        //echo "<br>failed=$failed";


/********************
A+ Count WHERE gpa = 4
*********************/
  $pluse=0;
      $sql = "SELECT * FROM `student_data` 
  WHERE dept = '$dept' AND batch = '$batch' AND semester = '$sem' AND gpa = 4";

      $sql_run = mysqli_query($con,$sql);
      if (! $sql_run) {
        echo "Error:".mysqli_error($con);
      } else {
       while ($row = mysqli_fetch_array($sql_run)) {
        $pluse = $pluse +1;
       }
      }
        //echo "<br>A+=$pluse";


  $passed_rate = ($passed * 100)/$total; //passed percent
  $passed_rate = round($passed_rate,2);
$failed_rate = ($failed * 100)/$total;  //failed percent
$failed_rate = round($failed_rate,2);
//echo "<br>passed_percent=$passed_rate";
//echo "<br>failed_percent=$failed_rate";


//----------------------------------------
//previous semester count
//----------------------------------------
echo "<hr> <hr>";
$pre_sem = $sem-1;
//echo "<br> <br> previous semester is=".$pre_sem;


/********************
previous semester Total Student Count
*********************/
  $pre_total=0;
      $sql = "SELECT * FROM `student_data` 
  WHERE dept = '$dept' AND batch = '$batch' AND semester = '$pre_sem'";

      $sql_run = mysqli_query($con,$sql);
      if (! $sql_run) {
        echo "Error:".mysqli_error($con);
      } else {
       while ($row = mysqli_fetch_array($sql_run)) {
        $pre_total = $pre_total +1;
       }
      }
      //echo "<br> previous semester total=$pre_total";


/********************
Passed Count WHERE earn credit > 50% of total credit 
*********************/
  $pre_passed=0;
      $sql = "SELECT * FROM `student_data` 
  WHERE dept = '$dept' AND batch = '$batch' AND semester = '$pre_sem' AND earncredit > (totalcredit/2)";

      $sql_run = mysqli_query($con,$sql);
      if (! $sql_run) {
        echo "Error:".mysqli_error($con);
      } else {
       while ($row = mysqli_fetch_array($sql_run)) {
        $pre_passed = $pre_passed +1;
       }
      }
        //echo "<br>passed=$pre_passed";


/********************
failed Count WHERE earn credit < 50% of total credit 
*********************/
  $pre_failed=0;
      $sql = "SELECT * FROM `student_data` 
  WHERE dept = '$dept' AND batch = '$batch' AND semester = '$pre_sem' AND earncredit < (totalcredit/2)";

      $sql_run = mysqli_query($con,$sql);
      if (! $sql_run) {
        echo "Error:".mysqli_error($con);
      } else {
       while ($row = mysqli_fetch_array($sql_run)) {
        $pre_failed = $pre_failed +1;
       }
      }
        //echo "<br>failed=$pre_failed";



/********************
A+ Count WHERE gpa = 4
*********************/
  $pre_pluse=0;
      $sql = "SELECT * FROM `student_data` 
  WHERE dept = '$dept' AND batch = '$batch' AND semester = '$pre_sem' AND gpa = 4";

      $sql_run = mysqli_query($con,$sql);
      if (! $sql_run) {
        echo "Error:".mysqli_error($con);
      } else {
       while ($row = mysqli_fetch_array($sql_run)) {
        $pre_pluse = $pre_pluse +1;
       }
      }
        //echo "<br>A+=$pre_pluse";



$pre_passed_rate = ($pre_passed * 100)/$pre_total; //passed percent
 $pre_passed_rate = round($pre_passed_rate,2);


$pre_failed_rate = ($pre_failed * 100)/$pre_total; 
$pre_failed_rate = round($pre_failed_rate,2); 
//failed percent
//echo "<br>passed_percent=$pre_passed_rate";
//echo "<br>failed_percent=$pre_failed_rate";



/********************
Show data in Table
*********************/
echo '
<div class="col-md-12">


          <div class="box">
            <div class="box-header text-center">
              <h3 class="box-title">Semester Wise Result Analysis With Previous Semester</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered">
                <tbody>
                    <tr>
                      <th>Status</th>
                  <th>Present Semester ('.$sem.')</th>
                  
                  <th>Previous Semester ('.$pre_sem.')</th>
                  
                </tr>
              
                <tr>
                  <td><strong>Total Student</strong></td>
                  <td>'.$total.'</td>
                 <td>'.$pre_total.'</td>
                </tr>

                 <tr>
                  <td><strong>Pass Rate</strong></td> 
                  <td>'.$passed_rate.'</td>
                 <td>'.$pre_passed_rate.'</td>
                </tr>

                 <tr>
                  <td><strong>Failed Rate</strong></td>
                  <td>'.$failed_rate.'</td>
                 <td>'.$pre_failed_rate.'</td>
                </tr>

                 <tr>
                  <td><strong>A+</strong></td>
                  <td>'.$pluse.'</td>
                 <td>'.$pre_pluse.'</td>
                </tr>
                
                
                
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
<div class="col-md-6">
    <!-- Multi Series Column Chart -->
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer1", {

      theme: "theme2",
      animationEnabled: true,
            
      title:{
        text: "Semester Result Analysis with Previous Semester"              
      },

      data: [  //array of dataSeries     
      { //dataSeries - first quarter
 /*** Change type "column" to "bar", "area", "line" or "pie"***/        
       type: "column",
       name: "Previous Semester",
       showInLegend: true,
       dataPoints: [
       { label: "Total Student", y: <?php echo $pre_total; ?> },
       { label: "pass Rates", y: <?php echo $pre_passed_rate; ?> },                                 
       { label: "fail Rates", y: <?php echo $pre_failed_rate; ?> },
       { label: "A+ Rates", y: 40 }  
      
       ]
     },

     { //dataSeries - second quarter

      type: "column",
      name: "Present Semester", 
      showInLegend: true,               
      dataPoints: [
      { label: "Total Student", y: <?php echo $total; ?> },
      { label: "pass Rates", y: <?php echo $passed_rate; ?> },
      { label: "fail Rates", y: <?php echo $failed_rate; ?> },
      { label: "A+ Rates", y: 48 }                                    
      
      
      ]
    }
    ],
 /** Set axisY properties here*/
    axisY:{
      prefix: "",
      suffix: ""
    }    
  });

chart.render();
}
</script>

     <!-- <div id="chartContainer1" style="height: 300px; width: 100%;">
  </div> --> 

</div> <!-- col end -->


   </div>
   <div class="container">
    <div id="myDiv"></div>

    <script>
var xValue = ['Total Student', 'pass Rates', 'fail Rates', 'A+ Rates'];

var yValue = [<?php echo $total; ?>, <?php echo $passed_rate; ?>, <?php echo $failed_rate; ?>,<?php echo $pluse; ?>];
var yValue2 = [<?php echo $pre_total; ?>, <?php echo $pre_passed_rate; ?>, <?php echo $pre_failed_rate; ?>,<?php echo $pre_pluse; ?>];

var trace1 = {
  x: xValue,
  y: yValue,
  type: 'bar',
  text: yValue,
  textposition: 'auto',
  hoverinfo: 'none',
  opacity: 0.5,
  marker: {
    color: 'rgb(158,202,225)',
    line: {
      color: 'rbg(8,48,107)',
      width: 1.5
    }
  }
};

var trace2 = {
  x: xValue,
  y: yValue2,
  type: 'bar',
  text: yValue2,
  textposition: 'auto',
  hoverinfo: 'none',
  marker: {
    color: 'rgba(58,200,225,.5)',
    line: {
      color: 'rbg(8,48,107)',
      width: 1.5
    }
  }
};

var data = [trace1,trace2];

var layout = {
  title: 'Semester Result Report with Bar Chart'
};

Plotly.newPlot('myDiv', data, layout);
</script>
   </div> <!-- container end -->


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
