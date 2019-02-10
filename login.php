<?php
$id=$_POST['a'];
$pass=$_POST['pass'];
echo $id;
echo $pass;




include_once('dbc.php');

$sql = "SELECT *  FROM `ip` WHERE `id`='$id' AND `pass`='$pass'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

$num=mysqli_num_rows($result);


if (empty($id)||empty($pass)){

    header("location:index.html");

    exit();

}

elseif ($row['id']==$id && $row['pass']==$pass&& $num==1){

   

    session_start();

    $_SESSION['uid']=$id;

    header("location:user.php");



   

}



else{

    if ($id=="admin"  && $pass=="admin" ){

        session_start();

        $_SESSION['uad']=$id;

        header("location:admin.php");

    

    

       

    }


     else{

         echo "failed to login";

    header("location:index.php");

    echo "failed to login";

     }

}

echo $id;




?>



