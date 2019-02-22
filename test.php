<?php
 require_once("assets/connection.php");
 
?>

<?php 
$sql = "SELECT * FROM student_info INNER JOIN result WHERE student_info.id = result.id";
$sqlrun = mysqli_query($con,$sql);
if (!$sqlrun ) {
	echo "Something is wrong";
} else {
	while ($row = (mysqli_fetch_array($sqlrun))) {
		echo "ID : $row[sid]-- Result :  $row[result]<br>";
	}
}

 ?>


 <!-- ------------------------------------------
 ------------------------------------------ -->

 <!-- A+ count -->
<?php 
if(isset($_POST['result']))
{

$q = "SELECT COUNT(id) AS apluse FROM student WHERE result = 4";
$sql = mysqli_query($con,$q);
if ($sql) {
  while ($row=mysqli_fetch_array($sql)) {
$apluse =$row['apluse'];
   
  }
}

echo "<br>A+ =$apluse";
}
?>

<!-- A count -->
<?php 
if(isset($_POST['result']))
{

$q = "SELECT COUNT(id) AS apluse FROM student WHERE result BETWEEN 3.75 AND 3.99";
$sql = mysqli_query($con,$q);
if ($sql){
  while ($row=mysqli_fetch_array($sql)){
$agrade =$row['apluse'];
   
  }
}

echo "<br>A =$agrade";
}
?>

<!-- total count -->
<?php 
if(isset($_POST['result']))
{

$total=0;
$q = "SELECT * FROM student ";
$sql = mysqli_query($con,$q);
if ($sql) {
  while ($row=mysqli_fetch_array($sql)) {
$total = $total +1;
   
  }
}

//echo "<br>total=$total";
}
?>



<!-- passed count -->
<?php 
if(isset($_POST['result']))
{

$passed=0;
$q = "SELECT * FROM student WHERE result > 0";
$sql = mysqli_query($con,$q);
if ($sql) {
  while ($row=mysqli_fetch_array($sql)) {
$passed = $passed +1;
   
  }
}

//echo "<br>passed=$passed";
}
?>



<!-- failed count -->
<?php 
if(isset($_POST['result']))
{

$failed=0;
$q = "SELECT * FROM student WHERE result = 0 ";
$sql = mysqli_query($con,$q);
if ($sql) {
  while ($row=mysqli_fetch_array($sql)) {
$failed = $failed +1;
   
  }
}

//echo "<br>failed=$failed";


//calculate percenteg

$passed_percent = ($passed * 100)/$total; //passed percent
$failed_percent = ($failed * 100)/$total;  //failed percent

echo "  <div class=\"info-box\">
            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-envelope-o\"></i></span>

            <div class=\"info-box-content\">
              <span class=\"info-box-text\">
              total=$total  ||  passed=$passed || failed=$failed--A+ =$apluse
              <br>passed-percent = $passed_percent
              <br>failed-percent = $failed_percent
              </span>
              <span class=\"info-box-number\"></span>
            </div>
            <!-- /.info-box-content -->
          </div>";


}
?>

<!-- $q = "SELECT * FROM student WHERE dept='$dept' AND batch='$batch' AND sem='$sem' result > 0"; -->

<?php 

$a='10th';
$b='5th';
$c = $a-$b;
$c = ($c.'th');

echo "<br> result= ".($c);
 ?>