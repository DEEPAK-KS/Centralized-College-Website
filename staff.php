<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="head.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <title>Staff</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }
    ::-webkit-scrollbar{
        width: 0px;
    }
    body{
        background: rgba(128,128,128,.1);
        background-size: cover;
    }
    .row{
        display: flex;
        position: relative;
        margin: 20px;
    }
    .row div{
        margin-right: 20px;
    }
    .row p{
        font-weight: 400;
        margin: 0;
    }
    .row div{
        flex-basis: 32%;
        border-radius: 10px;
        position: relative;
        color: #333;
        background-color: aliceblue;
        overflow: hidden;
    }
    .row img{
        width: 100%;
        display: block;
    }
    div .content{
        width: 100%;
        text-align: center;
        border: none;
    }
    .sub-header nav{
        display: flex;
    }
    .sub-header img{
        margin-top: 30px;
        flex-basis: 20%;
        height: 100px;
        width: 200px;
    }
    .sub-header div{
        padding-top: 30px;
        width: 80%;
       
    }
    .sub-header div h2{
        font-weight: 400;
        font-size: 36px;
        margin-top: 30px;
        color: #fff;
    }
    .sub-header{
        height: 30vh;
        background-image: linear-gradient(rgba(4,9,3,.7),rgba(4,9,30,.7)),url("staffbg.jpg");
        background-position:50%;
        background-size: cover;
    }
<?php include 'connect.php';?>
</style>
<body>
    <section class="sub-header">
        <nav>
            <a href="home.php"><img src="LOGO2.png" class="logo"></a>
            <div>
                <h2>SAINT TERESA</h2>
            </div>
        </nav>
    </section>
    <section class="all">
        <div class="row">
            <div>
                <img src="chemical.jpg">
                <div class="content">
                    <p>Chemical Engineering</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1001;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
            <div>
                <img src="civil.jpg">
                <div class="content">
                    <p>Civil</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1002;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
            <div>
                <img src="cs.jpg">
                <div class="content">
                    <p>Computer</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1003;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
            <div>
                <img src="food.jpg">
                <div class="content">
                    <p>Food Technology</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1004;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div>
                <img src="electronic.jpg">
                <div class="content">
                    <p>Electronic & Electrical Engineering</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1005;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
            <div>
                <img src="electrical.jpg" style="height: 200px;">
                <div class="content">
                    <p>Electrical & Electronics Engineering</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1006;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
            <div>
                <img src="it.jpg">
                <div class="content">
                    <p>Information Technology</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1007;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
            <div>
                <img src="mech.jpg">
                <div class="content">
                    <p>Mechanical</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1008;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div>
                <img src="metal.jpg">
                <div class="content">
                    <p>Metallurgical & Materials</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1009;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
            <div>
                <img src="computer.jpg">
                <div class="content">
                    <p>MCA</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1010;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
            <div>
                <img src="science.jpg">
                <div class="content">
                    <p>Basic Science</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1011;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
            <div>
                <img src="maths.jpg">
                <div class="content">
                    <p>Humanities</p>
                    <?php
                    $sql="select count(*) as count from faculty where deptID=1012;"; 
                    $result=$conn->query($sql);
                    $row = $result->fetch_assoc();
                    $Fctlycount = $row['count'];
                    echo "Total staff :  $Fctlycount" ;
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>