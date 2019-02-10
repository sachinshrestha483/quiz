<?php


session_start();
$a=$_SESSION['uid'];
  if ($_SESSION['uid'])
  {
      echo"";
  }
  else{
      header('location:index.html');
  }
  
  $qtid=$_POST['qtid'];


   if (isset($_POST['q1'])) {
   $q1=$_POST['q1'];
   $qid1=$_POST['qid1'];
     
   }
   else{
   $q1=NULL;
   $qid1=NULL;
 }



if (isset($_POST['q2'])) {
   $q2=$_POST['q2'];
      $qid2=$_POST['qid2'];

     
   }
   else{
   $q2=NULL;
      $qid2=NULL;

 }





if (isset($_POST['q3'])) {
   $q3=$_POST['q3'];
      $qid3=$_POST['qid3'];

     
   }
   else{
   $q3=NULL;
      $qid3=NULL;

 }



if (isset($_POST['q4'])) {
   $q4=$_POST['q4'];
      $qid4=$_POST['qid4'];

     
   }
   else{
   $q4=NULL;
      $qid4=NULL;

 }






if (isset($_POST['q5'])) {
   $q5=$_POST['q5'];
      $qid5=$_POST['qid5'];

     
   }
   else{
   $q5=NULL;
      $qid5=NULL;

 }






if (isset($_POST['q6'])) {
   $q6=$_POST['q6'];
      $qid6=$_POST['qid6'];

     
   }
   else{
   $q6=NULL;
      $qid6=NULL;

 }






if (isset($_POST['q7'])) {
   $q1=$_POST['q7'];
      $qid7=$_POST['qid7'];

     
   }
   else{
   $q7=NULL;
      $qid7=NULL;

 }






if (isset($_POST['q8'])) {
   $q1=$_POST['q8'];
      $qid8=$_POST['qid8'];

     
   }
   else{
   $q8=NULL;
      $qid8=NULL;

 }




if (isset($_POST['q9'])) {
   $q1=$_POST['q9'];
      $qid9=$_POST['qid9'];

     
   }
   else{
   $q9=NULL;
      $qid9=NULL;

 }





if (isset($_POST['q10'])) {
   $q1=$_POST['q10'];
      $qid10=$_POST['qid10'];

     
   }
   else{
   $q10=NULL;
      $qid10=NULL;

 }








$noqa = array(); 
$noaa=array();
$x=1;
while($x<=10){

if(${'q'.$x}==NULL){
  
}

else{

array_push($noqa,${'qid'.$x});
array_push($noaa,${'q'.$x});
}

$x=$x+1;  
}
$score=0;
$x=0;
$y=1;
$correct=0;
$incorrect=0;
$marks=0;

print_r($noqa);

foreach ($noqa as &$k) {
    include_once('dbc.php');
$sql = "SELECT * FROM `questions` WHERE `qid`=$k";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($noaa[$x]==$row['ans1']){
  #echo 'yes';
  $correct=$correct+1;
  $marks=$marks+$row['marks'];
  
  
  
}
else{

  

  #echo 'no';
  $incorrect=$incorrect+1;

}
$x=$x+1;    
}

$user= $_POST['user'];
#echo $user;
#echo'dj';
#$qtid

#echo $marks;


include_once('dbc.php');

$sql = "INSERT INTO `ansentry`( `uid`, `qtid`, `points`) VALUES ('$user','$qtid','$marks')";
echo $sql;
$conn->query($sql);





?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Result</title>
  </head>
  <body style="background-color:#1BCA9B;">
   <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4" align="center">Result</h1>




  </div>


</div>

<div class="container">
<ul class="list-group">
  
  <li  align='center'  class="list-group-item list-group-item-primary">You Have Attempted <?php echo  count($noqa);?>  Questions</li>
  <li class="list-group-item list-group-item-success" align='center'>Correct: <?php echo$correct; ?></li>
  <li  class="list-group-item list-group-item-danger" align='center'>Incorrect: <?php echo $incorrect; ?></li>
    <li  class="list-group-item list-group-item-secondary" align='center'>Total: <?php echo $marks; ?></li>

</ul>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>