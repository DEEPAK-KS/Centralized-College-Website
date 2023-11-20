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
        if(isset($_POST['plcmntflag'])){
            if($_POST['plcmntflag']==0){
                 $plcmntId=$_POST['plcmntId'];
                 $sql="delete from placement where PlcmntID = $plcmntId;";
                 $conn->query($sql);
                 if(mysqli_affected_rows($conn)==0){
                    $_SESSION['message'] = "Delete_Error";
                }
                else{
                    $_SESSION['message'] = "Delete_Done";
                }
            }
            if ($_POST['plcmntflag'] == 1) {
                $sql="SELECT PlcmntID as count FROM placement ORDER BY PlcmntID DESC LIMIT 1;"; 
                $result=$conn->query($sql);
                $row = $result->fetch_assoc();
                $plcmntId = $row['count']+1;
                $plc_Name = $_POST['plc-Name'];
                $plc_deptId = $_POST['plc-deptId'];
                $courseId = $_POST['courseId'];
                $cmpnyName = $_POST['cmpnyName'];
                $plc_bchId = $_POST['plc-bchId'];
                $sql = "INSERT INTO Placement (PlcmntID, BatchID, DeptID, CourseID, studName, Company) VALUES($plcmntId, $plc_bchId, $plc_deptId, $courseId, '$plc_Name', '$cmpnyName');";
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