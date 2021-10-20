<?php

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$Mno=$_POST['Mno'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$fno=$_POST['fno'];
$street=$_POST['street'];
$colony=$_POST['colony'];
$city=$_POST['city'];
$state=$_POST['state'];
$pno=$_POST['pno'];
$cname=$_POST['cname'];
$ccity=$_POST['ccity'];
$degree=$_POST['degree'];
$category=$_POST['category'];
$host="localhost";
$dbusername="root";
$dbpassword= "";
$dbname="test";

  //Database connection
  $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

  if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO `registration` (`fname`,`mname`,`lname`,`email`,`Mno`,`gender`,`date`,`fno`,`street`,`colony`,`city`,`state`,`pno`,`cname`,`ccity`,`degree`,`category`)
    values ('$fname','$mname','$lname','$email','$Mno','$gender','$date','$fno','$street','$colony','$city','$street','$pno','$cname','$ccity','$degree','$category')";
    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
  

    


?>