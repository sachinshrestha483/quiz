<?php

session_start();
$user=$_SESSION['uid'];
  if ($_SESSION['uid'])
  {
      echo"";
  }
  else{
      header('location:index.html');
  }
  
   $qh=$_GET['titid'];



include_once('dbc.php');
$sql7 = "SELECT `sno` FROM `ansentry` WHERE `uid`='$user' AND `qtid`='$qh'";

$result7 = $conn->query($sql7);

$row7 = $result7->fetch_assoc();

if ($row7['sno']==NULL) {
  
}

else{
  
  

  header('location:already.php');
  
}

  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Quiz</title>
    <style type="text/css">
      

      #input_9 {
width: 13px !important;
}

#DAE0E2

    </style>
  </head>

  <body style="background-color:#EAF0F1">
    <br><br>
<div class='container'>


<div align="center">
<a href="#carouselExampleControls" role="button" data-slide="prev" class="btn btn-primary"><-Prev</a>
&nbsp;
<a  href="#carouselExampleControls" role="button" data-slide="next" class="btn btn-primary">Next-></a>
</div>

<div  style="background-color:#45CE30;" class="container">
  


<h1 align="center">GK</h1>


</div>
<?php
$a=array();
include_once('dbc.php');
$sql = "SELECT * FROM `questions` WHERE `qtid`=$qh";

$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
        array_push($a,$row['qid']);
}
#print_r($a);
#echo $a[0];
#echo $a[1];
#echo count($a);









?>


<div id="carouselExampleControls" class="carousel slide" data-interval="false" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <?php  
      include_once('dbc.php');
$sql1 = "SELECT * FROM `questions` WHERE `qid`=$a[0]";

$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

      ?>
      <?php if($row1['ques']==NULL){

}
else{
        ?>

<img src="" class="d-block w-100" alt="">
      <form action="resultofq.php" method="post">
   <div align="center">
    <h3> <?php echo $row1["ques"]; ?></h3>
    <input type="radio" name="q1" value="<?php echo $row1["o1"]; ?>"> <?php echo $row1["o1"]; ?><br>
  <input type="radio" name="q1" value="<?php echo $row1["o2"]; ?>"> <?php echo $row1["o2"]; ?><br>
  <input type="radio" name="q1" value="<?php echo $row1["o3"]; ?>"> <?php echo $row1["o3"]; ?><br>  
<input type="radio" name="q1" value="<?php echo $row1["o4"]; ?>"> <?php echo $row1["o4"]; ?><br>  
<input type="hidden" name="qtid" value='<?php echo$qh; ?>'>
 <input type="hidden" name="qid1" value='<?php echo$a[0]; ?>'>
<input type="hidden" name="user" value='<?php echo$user; ?>'>
 

  </div>


    </div>

    <?php
  }
  ?>











<?php  
if (isset($a[1])) {
   include_once('dbc.php');
$sql1 = "SELECT * FROM `questions` WHERE `qid`=$a[1]";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

      ?>
      <?php if($row1['ques']==NULL){

}
else{
        ?>

    <div class="carousel-item">
      
      <img src="..." class="d-block w-100" alt="">
      <div align="center">
        
    
   <h3> <?php echo $row1["ques"]; ?></h3>
    <input type="radio" name="q2" value="<?php echo $row1["o1"]; ?>"> <?php echo $row1["o1"]; ?><br>
  <input type="radio" name="q2" value="<?php echo $row1["o2"]; ?>"> <?php echo $row1["o2"]; ?><br>
  <input type="radio" name="q2" value="<?php echo $row1["o3"]; ?>"> <?php echo $row1["o3"]; ?><br>  
<input type="radio" name="q2" value="<?php echo $row1["o4"]; ?>"> <?php echo $row1["o4"]; ?><br> 
 <input type="hidden" name="qid2" value='<?php echo$a[1]; ?>'>

 </div>

<?php
  }
  ?>


    </div>
    
<?php

}
     

else{
  
}
?>



<?php  
if (isset($a[2])) {
   include_once('dbc.php');
$sql1 = "SELECT * FROM `questions` WHERE `qid`=$a[2]";

$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

      ?>
      <?php if($row1['ques']==NULL){

}
else{
        ?>

    <div class="carousel-item">
      
      <img src="..." class="d-block w-100" alt="">
      <div align="center">
        
    
   <h3> <?php echo $row1["ques"]; ?></h3>
    <input type="radio" name="q3" value="<?php echo $row1["o1"]; ?>"> <?php echo $row1["o1"]; ?><br>
  <input type="radio" name="q3" value="<?php echo $row1["o2"]; ?>"> <?php echo $row1["o2"]; ?><br>
  <input type="radio" name="q3" value="<?php echo $row1["o3"]; ?>"> <?php echo $row1["o3"]; ?><br>  
<input type="radio" name="q3" value="<?php echo $row1["o4"]; ?>"> <?php echo $row1["o4"]; ?><br> 
 <input type="hidden" name="qid3" value='<?php echo$a[2]; ?>'>

 </div>

<?php
  }
  ?>


    </div>
    
<?php

}
     

else{
  
}
?>







<?php  
if (isset($a[3])) {
   include_once('dbc.php');
$sql1 = "SELECT * FROM `questions` WHERE `qid`=$a[3]";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

      ?>
      <?php if($row1['ques']==NULL){

}
else{
        ?>

    <div class="carousel-item">
      
      <img src="..." class="d-block w-100" alt="">
      <div align="center">
        
    
   <h3> <?php echo $row1["ques"]; ?></h3>
    <input type="radio" name="q4" value="<?php echo $row1["o1"]; ?>"> <?php echo $row1["o1"]; ?><br>
  <input type="radio" name="q4" value="<?php echo $row1["o2"]; ?>"> <?php echo $row1["o2"]; ?><br>
  <input type="radio" name="q4" value="<?php echo $row1["o3"]; ?>"> <?php echo $row1["o3"]; ?><br>  
<input type="radio" name="q4" value="<?php echo $row1["o4"]; ?>"> <?php echo $row1["o4"]; ?><br> 
 <input type="hidden" name="qid4" value='<?php echo$a[3]; ?>'>

 </div>

<?php
  }
  ?>


    </div>
    
<?php

}
     

else{
  
}
?>






<?php  
if (isset($a[4])) {
   include_once('dbc.php');
$sql1 = "SELECT * FROM `questions` WHERE `qid`=$a[4]";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

      ?>
      <?php if($row1['ques']==NULL){

}
else{
        ?>

    <div class="carousel-item">
      
      <img src="..." class="d-block w-100" alt="">
      <div align="center">
        
    
   <h3> <?php echo $row1["ques"]; ?></h3>
    <input type="radio" name="q5" value="<?php echo $row1["o1"]; ?>"> <?php echo $row1["o1"]; ?><br>
  <input type="radio" name="q5" value="<?php echo $row1["o2"]; ?>"> <?php echo $row1["o2"]; ?><br>
  <input type="radio" name="q5" value="<?php echo $row1["o3"]; ?>"> <?php echo $row1["o3"]; ?><br>  
<input type="radio" name="q5" value="<?php echo $row1["o4"]; ?>"> <?php echo $row1["o4"]; ?><br>  
  <input type="hidden" name="qid5" value='<?php echo$a[4]; ?>'>

 </div>

<?php
  }
  ?>


    </div>
    
<?php

}
     

else{
  
}
?>




<?php  
if (isset($a[5])) {
   include_once('dbc.php');
$sql1 = "SELECT * FROM `questions` WHERE `qid`=$a[5]";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

      ?>
      <?php if($row1['ques']==NULL){

}
else{
        ?>

    <div class="carousel-item">
      
      <img src="..." class="d-block w-100" alt="">
      <div align="center">
        
    
   <h3> <?php echo $row1["ques"]; ?></h3>
    <input type="radio" name="q6" value="<?php echo $row1["o1"]; ?>"> <?php echo $row1["o1"]; ?><br>
  <input type="radio" name="q6" value="<?php echo $row1["o2"]; ?>"> <?php echo $row1["o2"]; ?><br>
  <input type="radio" name="q6" value="<?php echo $row1["o3"]; ?>"> <?php echo $row1["o3"]; ?><br>  
<input type="radio" name="q6" value="<?php echo $row1["o4"]; ?>"> <?php echo $row1["o4"]; ?><br>
 <input type="hidden" name="qid6" value='<?php echo$a[5]; ?>'>

 </div>




<?php
  }
  ?>


    </div>
    
<?php

}
     

else{
  
}
?>
















<div class="carousel-item">
      <img src="..." class="d-block w-100" alt="">
     
<br>
<br>
<br>
<br>
<br>

      <div align="center">
    <button type="submit" name='submit' class="btn btn-success">Submit</button>
  </div>

  </form>




    </div>
  





  </div>
  
</div>



</div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>


