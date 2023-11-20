<?php
 session_start ();
 include 'connect.php';
 $Uname=$_POST['usrname'];
 $pswd=$_POST['password'];
 $sql = "INSERT INTO credential (user, password) VALUES ('$Uname','$pswd')";
 $conn->query($sql);
 $_SESSION['user']=1;
 header("Location: home.php");
?>