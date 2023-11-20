<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
</head>
<?php include 'connect.php';?>
<body>
    <?php
    session_start ();
        $msg='Please check the corresponding Department and faculty id';
        if(isset($_POST['pool'])){
            if($_POST['pool']==0){
                $deptId = $_POST['DeptId'];
                $fctlyId = $_POST['FctlyId'];
                $sql="DELETE FROM Faculty WHERE DeptID = $deptId AND  FctlyID = $fctlyId;";
                $conn->query($sql);
                if(mysqli_affected_rows($conn)==0){
                    $_SESSION['message'] = "Delete_Error";
                }
                else{
                    $_SESSION['message'] = "Delete_Done";
                }
            }
            if ($_POST['pool']==1){
            $sql="SELECT FctlyID as count FROM faculty ORDER BY FctlyID DESC LIMIT 1;"; 
            $result=$conn->query($sql);
            $row = $result->fetch_assoc();
            $fctlyId = $row['count']+1;
            $deptId = $_POST['DeptId'];
            $fctlyName = $_POST['FctlyName'];
            $spec = $_POST['spec'];
            $sql="INSERT INTO faculty (FctlyID, FacultyName, Specialization, DeptID) VALUES($fctlyId,'$fctlyName','$spec',$deptId);";
            if($conn->query($sql)===FALSE){
                $_SESSION['message'] = "Delete_Error";
                }
            else{
                   $_SESSION['message'] = "Insert_Done";
            }
            }
        }
        ?>
    <?php
    header("Location: adminpg.php");
    exit();
    ?>
</body>
</html>