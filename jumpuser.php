<?php
    session_start ();
    include 'connect.php';
    $sql="select user,password from credential;";
    $result=$conn->query($sql);
    $flag=0;
    while($row=$result->fetch_assoc()){
        if(strtoupper($_POST['user'])==strtoupper($row['user']) && $_POST['pswd']==$row['password'] && $falg!=1){
            $_SESSION['userflag']=1;
            $_SESSION['UserName']=$_POST['user'];
            $flag=1;
            header("Location: loginjump.php");
            exit();
        }
        
    }
    if($flag==0){
        $_SESSION['userflag']=0;
        header("Location: admin.php");
        exit();
    }
     
?>