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
        if(isset($_POST['nonfctly_pool'])){
            if($_POST['nonfctly_pool']==0){
                $EmpID = $_POST['EmpID'];
                $position = $_POST['position'];
                $sql="DELETE FROM nonteachingstaff WHERE EmployeeID = $EmpID AND  Position = '$position';";
                $conn->query($sql);
                if(mysqli_affected_rows($conn)==0){
                    $_SESSION['message'] = "Delete_Error";
                }
                else{
                    $_SESSION['message'] = "Delete_Done";
                }
            }
            if ($_POST['nonfctly_pool']==1){
                $sql="SELECT EmployeeID as count FROM nonteachingstaff ORDER BY EmployeeID DESC LIMIT 1;"; 
                $result=$conn->query($sql);
                $row = $result->fetch_assoc();
                $empId = $row['count']+1;
                $position = $_POST['position'];
                $Name = $_POST['nonfctly_Name'];
                $phn = $_POST['phn'];
                $sql="INSERT INTO NonTeachingStaff (EmployeeID,Name, Position, ContactNumber)VALUES($empId,'$Name','$position','$phn');";
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
    <script>
        echo("done");
    </script>
</body>
</html>