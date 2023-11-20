<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
</head>
<?php include 'connect.php';?>
<body>
    <p>Form submitted successfully!</p>
    <?php
        session_start ();
        if(isset($_POST['batchflag'])){
            if($_POST['batchflag']==0){
                $bchId = $_POST['bch-Id'];
                $sql="DELETE FROM batch WHERE BatchID = $bchId";
                $conn->query($sql);
                if(mysqli_affected_rows($conn)==0){
                    $_SESSION['message'] = "Delete_Error";
                }
                else{
                    $_SESSION['message'] = "Delete_Done";
                }
            }
            if ($_POST['batchflag']==1){
            $sql="SELECT batchID as count FROM batch ORDER BY batchID DESC LIMIT 1;"; 
            $result=$conn->query($sql);
            $row = $result->fetch_assoc();
            $bchId = $row['count']+1;
            $bchName = $_POST['bch-Name'];
            $bchDept = $_POST['bch-deptId'];
            $bchCrc = $_POST['bch-courseId'];
            $Sdate = $_POST['Sdate'];
            $Ldate = $_POST['Ldate'];
            $sql="INSERT INTO batch (BatchID,BatchName,StartDate,EndDate,CourseID,DeptID) VALUES($bchId,'$bchName',$Sdate,$Ldate,$bchCrc,$bchDept);";
            if ($conn->query($sql) === FALSE) {
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