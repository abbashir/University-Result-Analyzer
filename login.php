
<?php 
ob_start();
require_once("connection.php"); ?>


?>
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
    
   <div class="container">    
       
        <div id="signupbox" style="margin-top:10px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title" style="text-align: center;">Login</div>
                           
                        </div>  
                        <div class="panel-body" >
                            <form  class="form-horizontal" action="" method="POST">
                            
                                <div class="form-group">
                                    <label for="firstname" class="col-md-4 control-label">Email :</label>
                                    <div class="col-md-6">
                                        <input type="Email" class="form-control" name="email" placeholder="Enter Your email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-4 control-label">password:</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="pass" placeholder="Enter your password">
                                    </div>
                                </div>
                                   

                             
                                
                                <div style="border-top: 1px solid #999; text-align: center; padding-top:20px"  class="form-group">

                                    <input class="btn btn-primary" type="submit" name="login" value="Login" style="margin-right: 10px;">
    
                                        
                                </div>
                                <hr>
                                <p>
                                  Don't have an account?
                                  <a href="signup.php">Sign Up</a>
                                </p>
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>

  <!-- login php--> 

        <?php 

       if(isset($_POST['login'])){
            
            //$name=  mysqli_real_escape_string($connect,$name);
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $column=0;
      //2. perform query.........
       $sql="SELECT * FROM `signup` WHERE email='$email' AND pass='$pass' LIMIT 1";
       $sqle=  mysqli_query($con, $sql); //here $result is resource file of query
     if ($sqle) {
  while ($row=mysqli_fetch_array($sqle)) {
      $column = $column +1;
echo '<div class="alert alert-success" style="text-align: center;">
    <strong>You have successfully login!</strong>
  </div>
';   

 $_SESSION['name']=$row['name'];
 $_SESSION['email']=$row['email'];
 $_SESSION['pass']=$row['pass'];
 $_SESSION['photo']=$row['photo'];
 
    header('Location: index.php');
  }
  if ($column==0) {
echo '<div class="alert alert-warning" style="text-align: center;">
    <strong>Warning!</strong>do not match email or password!! please try again.
  </div>
';  }
}
       //exit();
       }
       ?>

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
