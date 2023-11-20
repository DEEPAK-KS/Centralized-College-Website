<?php
     session_start ();
     $_SESSION['admin']=1;
     header("Location: adminpg.php");
     exit();
    ?>