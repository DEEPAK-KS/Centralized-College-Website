<?php
     session_start ();
     $_SESSION['admin']=0;
     header("Location: home.php");
     exit();
    ?>