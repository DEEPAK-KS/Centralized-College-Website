<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="head.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <title>ADMIN</title>
</head>
<?php include 'connect.php';
 session_start ();
 if( $_SESSION['admin']==0){
    header("Location: home.php");
 }
 ?>
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
        background: rgba(102, 102, 102, 0.1);
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
    .row .goup{
        display: flex;
        height: 100px;
        width: 315px;
        border-radius: 10px;
        position: relative;
        color: #333;
        background-color: aliceblue;
        overflow: hidden;
    }
    .row div svg{
        margin: 10px;
    }
    div .content{
        width: 100%;
        height: 100%;
        margin-top: 30px;
        margin-left:15px;
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
        background-image: linear-gradient(rgba(4,9,3,.7),rgba(4,9,30,.7)),url("adminpg-bg.jpg");
        background-position: 50%;
        background-size: cover;
    }
    .parent{
        display:grid;
    }
    .on{
        position: absolute;
        top: 30%;
        display: none;
        left: 27%;
        text-align: center;
        background: rgba(0,0,0,.7);
        color: #fff;
        width: 100vh;
        border-radius: 30px;
        height: 60vh;
    }
    .close svg{
        color: #fff;
        cursor: pointer;
    }
    .close{
        margin: 15px;
        background: transparent;
        text-align: right;
    }
    .on .choice{
        display: flex;
        background: transparent;
    }
    .choice h3,.choice input{
        margin-right: 10px;
        margin-left: 10px;
    }
    form div input{
        width: 180px;
        height: 30px;
        padding: 4px;
        border-radius: 20px;
    }

    form div select{
        width: 190px;
        height: 40px;
        padding: 5px;
        border-radius: 20px;
    }

    form div{
        margin: 40px 10px;
        width: 100%; 
    }   
    form div input{
        margin-right: 20px;
    }
    form{
        display: none;
    }
    .plcmnt div{
        display: flex;
        margin-bottom: 10px;
    }
    form div input{
        border: 2px solid rgba(0,0,0,.7);
    }
    section .goup{
        transition: .2s;
    }
    section .goup:hover {
        transform: translateY(-10px)
    }
    .pie div{
       transform: translateY(-2px);
    }
    .showdata{
        transform: translateY(-100px);
    }
    button {
        margin-left: 210px;
        font-family: inherit;
        font-size: 18px;
        color: black;
        padding: 0.8em 1.2em;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        border-radius: 25px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s;
        height: 45px;
        width: 200px;
    }
    button span{
        transform: translateX(-15px);
    }
    button:hover {
        transform: translateY(-3px);
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
    }

    button:active {
        transform: scale(0.95);
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }

    button span {
        display: block;
        margin-left: 0.4em;
        transition: all 0.3s;
    }

    button svg {
        width: 18px;
        height: 18px;
        fill: white;
        transition: all 0.3s;
    }

    button .svg-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.2); 
        margin-right: 0.5em;
        transition: all 0.3s;
    }

    button:hover .svg-wrapper {
    background-color: rgba(255, 255, 255, 0.5);
    }

    button:hover svg {
    transform: rotate(45deg);
    }      
    .logout {
        display: flex;
        height: 45px;
        width: 150px;
        align-items: center;
        justify-content: center;
        color: #fff;
        background: rgba(0, 0, 0, 0.2);
        border-radius: 3px;
        letter-spacing: 1px;
        transition: all 0.2s linear;
        cursor: pointer;
        border: none;
        margin: 20px;
        }

    .logout > svg {
        margin-right: 5px;
        margin-left: 5px;
        font-size: 20px;
        transition: all 0.4s ease-in;
    }

    .logout:hover > svg {
        font-size: 1.2em;
        transform: translateX(-5px);
        color: #fff;
    }

    .logout:hover { 
        transform: translateY(-4px);
    }
    .sub-header span {border-radius: 15px;}
    .default{
        display: flex;
    }
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
<body>
    <section class="sub-header">
        <nav>
            <a href="home.php"><img src="LOGO2.png" class="logo"></a>
            <div>
                <h2>ADMIN</h2>
            </div>
            <span class="logout" onclick="location.href='jumptohome.php'">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                    <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                  </svg>
                <span>LOGOUT</span>
            </span>
        </nav>
    </section>
    <div class="parent">
    <section class="all">
        <div class="row">
            <div onclick="divopen()" class="goup">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                </svg>
                <div class="content">
                    <p>Add Staff / Remove Staff</p>
                </div>
            </div>
            <div onclick="div2open()" class="goup">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-building-fill-gear" viewBox="0 0 16 16">
                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7.256A4.493 4.493 0 0 0 12.5 8a4.493 4.493 0 0 0-3.59 1.787A.498.498 0 0 0 9 9.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .39-.187A4.476 4.476 0 0 0 8.027 12H6.5a.5.5 0 0 0-.5.5V16H3a1 1 0 0 1-1-1V1Zm2 1.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5Zm3 0v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                <path d="M11.886 9.46c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                </svg>
                <div class="content">
                    <p>Placements</p>
                </div>
            </div>
            <div onclick="div3open()" class="goup">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                  </svg>
                <div class="content">
                    <p>Add / Remove Batch</p>
                </div>
            </div>
            <div class="pie" class='pie'>
                <div id="piechart"></div>
            </div>
        </div>
        <div class="row showdata">
            <div class="goup" onclick="non_teach_open()">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
                    <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                    <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>                          
                </svg>
                <div class="content">
                    <p>Non-Teaching</p><p>Faculty</p>
                </div>
            </div>
            <div class="goup">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
                    <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                    <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>                          
                </svg>
                <div class="content">
                    <p>Total Students</p><p>18232</p>
                </div>
            </div>
            <div class="goup">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
                <div class="content">
                    <p>Faculty</p><p>
                       <?php
                       $sql="SELECT count(*) as fctly_count FROM faculty;"; 
                       $result=$conn->query($sql);
                       $row = $result->fetch_assoc();
                       $fctly_count = $row['fctly_count'];
                       echo($fctly_count);
                       ?>
                    </p>
                </div>  
            </div>
        </div>
    </section>
    <section class="on"  id="staffclose">
        <div class="close" > 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x-octagon" viewBox="0 0 16 16" onclick="divclose()">
                <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </div>
        <div class="choice">
            <input type="radio" id="removefctly" name="staff" value="add" onchange="removefctly()" ><h3>Add Staff</h3>
            <input type="radio" id="addfctly" name="staff" value="remove" onchange="addfctly()"><h3>Remove Staff</h3>
        </div>
    <form method="POST" action="staff_sql.php" onsubmit="return validatestaff()" id="form">
        <div>
            <?php
                $sql="SELECT FctlyID as count FROM faculty ORDER BY FctlyID DESC LIMIT 1;"; 
                $result=$conn->query($sql);
                $row = $result->fetch_assoc();
                $fctlyId = $row['count']+1;
            ?>
            <input type="number" id="FctlyId" name="FctlyId" placeholder="Faculty ID" value="<?php echo htmlspecialchars($fctlyId);?>" disabled style="color:black; background:white;">
            <select name="DeptId" id="DeptId">
                <option value="" selected hidden>Department</option>
                <option value="1001" >CHEMICAL </option>
                <option value="1002" >CIVIL </option>
                <option value="1003" >COMPUTER </option>
                <option value="1004" >FOOD TECHNOLOGY </option>
                <option value="1005" >ELECTRONIC & COMMUNICATION </option>
                <option value="1006" >ELECTRICAL & ELECTRONICS  </option>
                <option value="1007" >INFORMATION TECHNOLOGY </option>
                <option value="1008" >MECHANICAL ENGINEERING  </option>
                <option value="1009" >METALLURGICAL & MATERIALS </option>
                <option value="1010" >MCA </option>
                <option value="1011" >HUMANITIES </option>
                <option value="1012" >BASIC SCIENCE </option>
            </select>
            <input type="number" name="pool" id='pool' hidden>
        </div>
        <div id="add-faculty">
            <input type="text" id="FctlyName" name="FctlyName" placeholder="Faculty Name">
            <input type="text" id="spec" name="spec" placeholder="Specialization">
        </div>
        <br>
        <button style="margin-top: 20px;" onclick="staff()">
            <div class="svg-wrapper-1">
              <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                </svg>
              </div>
            </div>
            <span>Submit</span>
          </button>
    </form>
    </section>
    <section class="on" id="placementclose">
        <div class="close" > 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x-octagon" viewBox="0 0 16 16" onclick="div2close()">
                <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </div>
        <div class="choice">
            <input type="radio" name="staff" value="add"onchange="removeplcmnt()"><h3>Add New Record</h3>
            <input type="radio" name="staff" value="remove" onchange="addplcmnt()"><h3>Remove Old Records</h3>
        </div>
    <form method="POST" action="placement_sql.php" onsubmit="return validateplacement()" id="plcmntform">
        <div class="default">
            <input type="text" id="plc-Name" name="plc-Name" placeholder="Name">
            <?php
                $sql="SELECT PlcmntID as count FROM placement ORDER BY PlcmntID DESC LIMIT 1;"; 
                $result=$conn->query($sql);
                $row = $result->fetch_assoc();
                $plcmntid = $row['count']+1;
            ?>
            <input type="number" id="plcmntId" name="plcmntId" value="<?php echo htmlspecialchars($plcmntid);?>" placeholder="Placement ID" style="color:black; background:white;">
            <select name="plc-deptId" id="plc-deptId" onchange="change_course()">
                <option value="" selected hidden>Department</option>
                <option value="1001" >CHEMICAL </option>
                <option value="1002" >CIVIL </option>
                <option value="1003" >COMPUTER </option>
                <option value="1004" >FOOD TECHNOLOGY </option>
                <option value="1005" >ELECTRONIC & COMMUNICATION </option>
                <option value="1006" >ELECTRICAL & ELECTRONICS  </option>
                <option value="1007" >INFORMATION TECHNOLOGY </option>
                <option value="1008" >MECHANICAL ENGINEERING  </option>
                <option value="1009" >METALLURGICAL & MATERIALS </option>
                <option value="1010" >MCA </option>
            </select>
            <input type="number" name="plcmntflag" id='plcmntflag' hidden>
        </div>
        <div id="hideme">
            <select name="courseId" id="courseId" style="margin-right:23px;">
                <option id="course0" value="" selected hidden>Course</option>
                <option id="course1" value="" hidden></option>
                <option id="course2" value="" hidden></option>
            </select>
            <input type="text" id="cmpnyName" name="cmpnyName" placeholder="Company Name">
            <input type="text" id="plc-bchId" name="plc-bchId" placeholder="Batch ID">
        </div>
        <br>
        <button onclick="plcmnt()">
            <div class="svg-wrapper-1">
              <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                </svg>
              </div>
            </div>
            <span>Submit</span>
          </button>
    </form>
    </section>
    <section class="on" id="batchclose">
        <div class="close" > 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x-octagon" viewBox="0 0 16 16" onclick="div3close()">
                <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </div>
        <div class="choice">
            <input type="radio" name="staff" value="add"onchange="removebatch()"><h3>Add New Batch</h3>
            <input type="radio" name="staff" value="remove" onchange="addbatch()"><h3>Remove Old Batch</h3>
        </div>
    <form method="post" action='batch_sql.php' onsubmit="return validatebatch()" id="batchform">
        <div class="default">
        <?php
                $sql="SELECT batchID as count FROM batch ORDER BY batchID DESC LIMIT 1;"; 
                $result=$conn->query($sql);
                $row = $result->fetch_assoc();
                $batchid = $row['count']+1;
            ?>
            <input type="number" id="bch-Id" name="bch-Id" placeholder="Batch ID" value="<?php echo htmlspecialchars($batchid);?>"  style="color:black; background:white;">
            <input type="text" id="bch-Name" name="bch-Name" placeholder="Batch Name">
            <select name="bch-deptId" id="bch-deptId" onchange="change_course_bch()">
                <option value="" selected hidden>Department</option>
                <option value="1001" >CHEMICAL </option>
                <option value="1002" >CIVIL </option>
                <option value="1003" >COMPUTER </option>
                <option value="1004" >FOOD TECHNOLOGY </option>
                <option value="1005" >ELECTRONIC & COMMUNICATION </option>
                <option value="1006" >ELECTRICAL & ELECTRONICS  </option>
                <option value="1007" >INFORMATION TECHNOLOGY </option>
                <option value="1008" >MECHANICAL ENGINEERING  </option>
                <option value="1009" >METALLURGICAL & MATERIALS </option>
                <option value="1010" >MCA </option>
            </select>
            <input type="number" name="batchflag" id='batchflag' hidden>
        </div>
        <div id="batchhideme">
            <select name="bch-courseId" id="bch-courseId" style="margin-right:23px;">
                <option id="course0" value="" selected hidden>Course</option>
                <option id="bch_course1" value="" hidden></option>
                <option id="bch_course2" value="" hidden></option>
            </select>
            <input type="text" name="Sdate" id="Sdate" placeholder="Start Year">
            <input type="text" name="Ldate" id="Ldate" placeholder="End Year">
        </div>
        <br>
        <button>
            <div class="svg-wrapper-1">
              <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                </svg>
              </div>
            </div>
            <span>Submit</span>
          </button>
    </form>
    </section>
    <section class="on"  id="non_teachclose">
        <div class="close" > 
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x-octagon" viewBox="0 0 16 16" onclick="non_teach_close()">
                <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </div>
        <div class="choice">
            <input type="radio" name="staff" value="add" onchange="addnon_teach()" ><h3>Add Faculty</h3>
            <input type="radio" name="staff" value="remove" onchange="removenon_teach()"><h3>Remove Faculty</h3>
        </div>
    <form method="POST" action="non_teach_sql.php" onsubmit="return validatenon_teach()" id="non_teach_form">
        <div>
            <?php
                $sql="SELECT EmployeeID as count FROM nonteachingstaff ORDER BY EmployeeID DESC LIMIT 1;"; 
                $result=$conn->query($sql);
                $row = $result->fetch_assoc();
                $empId = $row['count']+1;
            ?>
            <input type="number" id="EmpID" name="EmpID" placeholder="Employee ID" value="<?php echo htmlspecialchars($empId);?>" disabled style="color:black; background:white;">
            <select id="positionSelect" name="position">
                <option value="" selected hidden>Field</option>
                <option value="Admin">Administrative</option>
                <option value="ITSupport">IT Support</option>
                <option value="Facilities">Facilities</option>
                <option value="Finance">Finance</option>
                <option value="Maintenance">Maintenance</option>
                <option value="HR">Human Resources</option>
                <option value="Security">Security</option>
                <option value="Other">Other</option>
            </select>
            <input type="number" name="nonfctly_pool" id='nonfctly_pool' hidden>
        </div>
        <div id="add-non-staff">
            <input type="text" id="nonfctly_Name" name="nonfctly_Name" placeholder="Faculty Name">
            <input type="number" id="nonfctly_phn" name="phn" placeholder="Phone Number">
        </div>
        <br>
        <button style="margin-top: 20px;" onclick="staff()">
            <div class="svg-wrapper-1">
              <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                </svg>
              </div>
            </div>
            <span>Submit</span>
          </button>
    </form>
    </section>
</div>
<?php
        if(isset($_SESSION['message'])){
            if($_SESSION['message'] == "Delete_Error"){
            ?>
            <script>swal("!!Error!!", "Please Check the Data", "error");</script>
            <?php
            }
            else if ($_SESSION['message'] == "Delete_Done"){
                ?>
            <script>swal("Done!", "Data Deleted", "success");</script>
            <?php
            }
            else if ($_SESSION['message'] == "Insert_Done"){
                ?>
            <script>swal("Done!", "Data Inserted", "success");</script>
            <?php
            }
            unset($_SESSION['message']);
        }
    ?>
<script>
    var fctlyId = document.getElementById("FctlyId");
    var fctlyName = document.getElementById("FctlyName");
    var DeptId = document.getElementById("DeptId");
    var spec = document.getElementById("spec");
    $fctlyid_flag=0;
    $plcmntid_flag=0;
    $bchid_flag=0;
    $nonteach_flag=0;
        //staff div open/close
        function divclose() {
            document.getElementById("staffclose").style.display='none';
            document.getElementById("form").style.display='none';
        }
        function divopen() {
            document.getElementById("staffclose").style.display='unset';
            div2close();
            div3close();
            non_teach_close();
        }

        //Non teaching faculty div open/close
        function non_teach_close() {
            document.getElementById("non_teach_form").style.display='none';
            document.getElementById("non_teachclose").style.display='none';
        }
        function non_teach_open() {
            document.getElementById("non_teachclose").style.display='unset';
            div2close();
            div3close();
            divclose();
        }

        ///remove Non teaching staff
        function removenon_teach(){
            if($nonteach_flag==0){
                $nonteach_flag=1;
                $nonteachsql=document.getElementById("EmpID").value;
            }
            document.getElementById("nonfctly_pool").value=0;
            document.getElementById("EmpID").value="";
            document.getElementById("non_teach_form").style.display='unset';
            document.getElementById("add-non-staff").style.display='none';
            document.getElementById("add-faculty").style.display='none';
            document.getElementById("EmpID").style.display='unset';
            document.getElementById("EmpID").removeAttribute("disabled");
        }

        ///////////add non teaching staff
        function addnon_teach(){
            if($nonteach_flag==0){
                $nonteach_flag=1;
                $nonteachsql=document.getElementById("EmpID").value;
            }
            else{
                document.getElementById("EmpID").value=$nonteachsql;
            }
            document.getElementById("nonfctly_pool").value=1;
            document.getElementById("EmpID").setAttribute('disabled', true);
            document.getElementById("non_teach_form").style.display='unset';
            document.getElementById("add-non-staff").style.display='unset';
            document.getElementById("add-non-staff").style.marginLeft='55px';
            document.getElementById("positionSelect").style.display='unset';
            document.getElementById("EmpID").style.display='unset';
        }



        //add/remove staff
        function addfctly() {
            if($fctlyid_flag==0){
                $fctlyid_flag=1;
                $FctlyIdsql=document.getElementById("FctlyId").value;
            }
            document.getElementById("add-faculty").style.display='none';
            document.getElementById("pool").value=1;
            document.getElementById("FctlyId").removeAttribute("disabled");
            document.getElementById("FctlyId").value="";
            document.getElementById("form").style.display='unset';
        }
        function removefctly() {
            if($fctlyid_flag==0){
                $fctlyid_flag=1;
                $FctlyIdsql=document.getElementById("FctlyId").value;
            }
            else{
                document.getElementById("FctlyId").value=$FctlyIdsql;
            }
            document.getElementById("add-faculty").style.display='unset';
            document.getElementById("form").style.display='unset';
            document.getElementById("FctlyId").setAttribute('disabled', true);
            document.getElementById("pool").value=0;
            document.getElementById("add-faculty").style.marginLeft='55px';
        }

        //open/close  placement div
        function div2close() {
            document.getElementById("placementclose").style.display='none';
            document.getElementById("plcmntform").style.display='none';
        }
        function div2open() {
            document.getElementById("placementclose").style.display='unset';
            divclose();
            div3close();
            non_teach_close();
        }

        //add/remove placemnt 
        function addplcmnt() {
            if($plcmntid_flag==0){
                $plcmntid_flag=1;
                $plcmntIdsql=document.getElementById("plcmntId").value;
            }
            document.getElementById("plc-Name").setAttribute('hidden', true);
            document.getElementById("plc-deptId").setAttribute('hidden', true);
            document.getElementById("hideme").style.display='none';
            document.getElementById("plcmntflag").value=0;
            document.getElementById("plcmntform").style.display='unset';
            document.getElementById("plcmntId").removeAttribute("disabled");
            document.getElementById("plcmntId").value="";
        }
        function removeplcmnt() {
            if($plcmntid_flag==0){
                $plcmntid_flag=1;
                $plcmntIdsql=document.getElementById("plcmntId").value;
            }
            else{
                document.getElementById("plcmntId").value=$plcmntIdsql;
            }
            document.getElementById("plc-Name").removeAttribute("hidden");
            document.getElementById("plc-deptId").removeAttribute("hidden");
            document.getElementById("hideme").style.display='flex';
            document.getElementById("plcmntflag").value=1;
            document.getElementById("plcmntform").style.display='unset';
            document.getElementById("plcmntId").setAttribute('disabled', true);
        }
        
        //batch div open/close
        function div3close() {
            document.getElementById("batchclose").style.display='none';
            document.getElementById("batchform").style.display='none';
        }
        function div3open() {
            document.getElementById("batchclose").style.display='unset';
            divclose();
            div2close();
            non_teach_close();
        }

        //batch add/remove
        function addbatch() {batchflag
            if($bchid_flag==0){
                $bchid_flag=1;
                $bchIdsql=document.getElementById("bch-Id").value;
            }
            document.getElementById("bch-deptId").setAttribute('hidden', true);
            document.getElementById("bch-Name").setAttribute('hidden', true);
            document.getElementById("bch-Id").removeAttribute("disabled");
            document.getElementById("bch-Id").value="";
            document.getElementById("batchflag").value=0;
            document.getElementById("batchhideme").style.display='none';
            document.getElementById("batchform").style.display='unset';
        }
        function removebatch() {
            if($bchid_flag==0){
                $bchid_flag=1;
                $bchIdsql=document.getElementById("bch-Id").value;
            }
            else{
                document.getElementById("bch-Id").value=$bchIdsql;
            }
            document.getElementById("bch-Id").setAttribute('disabled', true);
            document.getElementById("bch-deptId").removeAttribute("hidden");
            document.getElementById("batchflag").value=1;
            document.getElementById("bch-Name").removeAttribute("hidden");
            document.getElementById("batchhideme").style.display='flex';
            document.getElementById("batchform").style.display='unset';
        }

        //staff validation
        function validatestaff(){
            if(document.getElementById("add-faculty").style.display=='unset'){
                if(fctlyName.value==''){
                    fctlyName.style.borderColor='red';
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Enter A Valid Name!",
                    icon: "warning"
                });
                fctlyName.focus();
                    return false;
                }
                else{fctlyName.style.borderColor='rgba(0,0,0,.7)';}
                if(spec.value==''){
                    spec.style.borderColor='red';
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Enter A Valid Specilization!",
                    icon: "warning"
                });
                spec.focus();
                    return false;
                }
                else{spec.style.borderColor='rgba(0,0,0,.7)';}
            } 
            if (fctlyId.value==''){
                fctlyId.style.borderColor='red';
                Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Enter A Valid ID!",
                    icon: "warning"
                });
                fctlyId.focus();
                return false;
             }
             else{fctlyId.style.borderColor='rgba(0,0,0,.7)';}
             if (DeptId.value==''){
                DeptId.style.borderColor='red';
                Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Choose A Department!",
                    icon: "warning"
                });
                DeptId.focus();
                return false;
             }
             else{
                DeptId.style.borderColor='rgba(0,0,0,.7)';
            }
             return true;
        }

        //placement validation
        var plc_Name = document.getElementById("plc-Name");
        var plcmntId = document.getElementById("plcmntId");
        var plc_deptId = document.getElementById("plc-deptId");
        var courseId = document.getElementById("courseId");
        var cmpnyName = document.getElementById("cmpnyName");
        var plc_bchId = document.getElementById("plc-bchId");

        function validateplacement(){
            if(document.getElementById("hideme").style.display=='flex'){
                if(plc_bchId.value==''){
                    plc_bchId.style.borderColor='red';
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Enter A Valid Batch ID!",
                    icon: "warning"
                });
                plc_bchId.focus();
                return false;
                }else{plc_bchId.style.borderColor='rgba(0,0,0,.7)';}
                
                if(plc_Name.value==''){
                    plc_Name.style.borderColor='red';
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Enter A Valid Name!",
                    icon: "warning"
                });
                plc_Name.focus();
                    return false;
                }else{plc_Name.style.borderColor='rgba(0,0,0,.7)';}

                if (plc_deptId.value==''){
                    plc_deptId.style.borderColor='red';
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Choose A Department!",
                    icon: "warning"
                });
                plc_deptId.focus();
                    return false;
                }else{plc_deptId.style.borderColor='rgba(0,0,0,.7)';}

                if (courseId.value==''){
                    courseId.style.borderColor='red';
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Choose A Course!",
                    icon: "warning"
                });
                courseId.focus();
                    return false;
               }else{courseId.style.borderColor='rgba(0,0,0,.7)';}

               if (cmpnyName.value==''){
                cmpnyName.style.borderColor='red';
                Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Enter A valid Company Name!",
                    icon: "warning"
                });
                cmpnyName.focus();
                return false;
               }else{cmpnyName.style.borderColor='rgba(0,0,0,.7)';}

            } 
            if(plcmntId.value==''){
                plcmntId.style.borderColor='red';
                Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Enter A valid Placement ID!",
                    icon: "warning"
                });
                plcmntId.focus();
                return false;
            }else{plcmntId.style.borderColor='rgba(0,0,0,.7)';}
            return true;
        }

        //batch validation
        var bch_id = document.getElementById("bch-Id");
        var bch_Name = document.getElementById("bch-Name");
        var bch_deptId = document.getElementById("bch-deptId");
        var bch_courseId = document.getElementById("bch-courseId");
        var Sdate = document.getElementById("Sdate");
        var Ldate= document.getElementById("Ldate");

        function validatebatch(){
            if(document.getElementById("batchhideme").style.display=='flex'){
                if(bch_Name.value==''){
                    bch_Name.style.borderColor='red';
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Enter A valid Batch Name!",
                    icon: "warning"
                });
                bch_Name.focus();
                    return false;
                }else{bch_Name.style.borderColor='rgba(0,0,0,.7)';}
                
                if(bch_courseId.value==''){
                    bch_courseId.style.borderColor='red';
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Choose A Course!",
                    icon: "warning"
                });
                bch_courseId.focus();
                    return false;
                }else{bch_courseId.style.borderColor='rgba(0,0,0,.7)';}

                if (bch_deptId .value==''){
                    bch_deptId .style.borderColor='red';
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Choose A Department!",
                    icon: "warning"
                });
                bch_deptId.focus();
                    return false;
                }else{bch_deptId .style.borderColor='rgba(0,0,0,.7)';}

                if (Sdate.value==''){
                    Sdate.style.borderColor='red';
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please A Valid Start Year!",
                    icon: "warning"
                });
                Sdate.focus();
                    return false;
               }else{Sdate.style.borderColor='rgba(0,0,0,.7)';}

               if (Ldate.value==''){
                Ldate.style.borderColor='red';
                Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please A Valid End Year!",
                    icon: "warning"
                });
                Ldate.focus();
                return false;
               }else{Ldate.style.borderColor='rgba(0,0,0,.7)';}

            } 
            if(bch_id.value==''){
                bch_id.style.borderColor='red';
                Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please A Valid Batch ID!",
                    icon: "warning"
                });
                bch_id.focus();
                return false;
            }else{bch_id.style.borderColor='rgba(0,0,0,.7)';}
            return true;
        }

        function change_course(){
            var choice=document.getElementById("plc-deptId").value;
            document.getElementById("course2").innerHTML="COURSE";
            document.getElementById("course2").value="";
            document.getElementById("course2").setAttribute("hidden", true);
            if (choice==1001){
                document.getElementById("course1").removeAttribute("hidden");
                document.getElementById("course1").innerHTML="CHEMICAL";
                document.getElementById("course1").value=101;
            }
            if (choice==1002){
                document.getElementById("course1").removeAttribute("hidden");
                document.getElementById("course1").innerHTML="CIVIL";
                document.getElementById("course1").value=102;
            }
            if (choice==1003){
                document.getElementById("course1").removeAttribute("hidden");
                document.getElementById("course1").innerHTML="COMPUTER";
                document.getElementById("course1").value=103;
            }
            if (choice==1004){
                document.getElementById("course1").removeAttribute("hidden");
                document.getElementById("course1").innerHTML="FOOD TECHNOLOGY";
                document.getElementById("course1").value=104;
            }
            if (choice==1005){
                document.getElementById("course1").removeAttribute("hidden");
                document.getElementById("course1").innerHTML="ELECTRONIC & COMMUNICATION";
                document.getElementById("course1").value=105;
            }
            if (choice==1006){
                document.getElementById("course1").removeAttribute("hidden");
                document.getElementById("course1").innerHTML="ELECTRICAL & ELECTRONICS";
                document.getElementById("course1").value=106;
            }
            if (choice==1007){
                document.getElementById("course1").removeAttribute("hidden");
                document.getElementById("course1").innerHTML="INFORMATION TECHNOLOGY";
                document.getElementById("course1").value=107;
            }
            if (choice==1008){
                document.getElementById("course1").removeAttribute("hidden");
                document.getElementById("course1").innerHTML="MECHANICAL ENGINEERING";
                document.getElementById("course1").value=108;
            }
            if (choice==1009){
                document.getElementById("course1").removeAttribute("hidden");
                document.getElementById("course1").innerHTML="METALLURGICAL & MATERIALS";
                document.getElementById("course1").value=109;
            }
            if (choice==1010){
                document.getElementById("course1").removeAttribute("hidden");
                document.getElementById("course1").innerHTML="INTEGRATED MCA (5 YEARS)";
                document.getElementById("course1").value=110;
                document.getElementById("course2").removeAttribute("hidden");
                document.getElementById("course2").innerHTML="REGULAR MCA (2 YEARS)";
                document.getElementById("course2").value=111;
            }
        }
        function change_course_bch(){
            var choice=document.getElementById("bch-deptId").value;
            document.getElementById("bch_course2").innerHTML="COURSE";
            document.getElementById("bch_course2").value="";
            document.getElementById("bch_course2").setAttribute("hidden", true);
            if (choice==1001){
                document.getElementById("bch_course1").removeAttribute("hidden");
                document.getElementById("bch_course1").innerHTML="CHEMICAL";
                document.getElementById("bch_course1").value=101;
            }
            if (choice==1002){
                document.getElementById("bch_course1").removeAttribute("hidden");
                document.getElementById("bch_course1").innerHTML="CIVIL";
                document.getElementById("bch_course1").value=102;
            }
            if (choice==1003){
                document.getElementById("bch_course1").removeAttribute("hidden");
                document.getElementById("bch_course1").innerHTML="COMPUTER";
                document.getElementById("bch_course1").value=103;
            }
            if (choice==1004){
                document.getElementById("bch_course1").removeAttribute("hidden");
                document.getElementById("bch_course1").innerHTML="FOOD TECHNOLOGY";
                document.getElementById("bch_course1").value=104;
            }
            if (choice==1005){
                document.getElementById("bch_course1").removeAttribute("hidden");
                document.getElementById("bch_course1").innerHTML="ELECTRONIC & COMMUNICATION";
                document.getElementById("bch_course1").value=105;
            }
            if (choice==1006){
                document.getElementById("bch_course1").removeAttribute("hidden");
                document.getElementById("bch_course1").innerHTML="ELECTRICAL & ELECTRONICS";
                document.getElementById("bch_course1").value=106;
            }
            if (choice==1007){
                document.getElementById("bch_course1").removeAttribute("hidden");
                document.getElementById("bch_course1").innerHTML="INFORMATION TECHNOLOGY";
                document.getElementById("bch_course1").value=107;
            }
            if (choice==1008){
                document.getElementById("bch_course1").removeAttribute("hidden");
                document.getElementById("bch_course1").innerHTML="MECHANICAL ENGINEERING";
                document.getElementById("bch_course1").value=108;
            }
            if (choice==1009){
                document.getElementById("bch_course1").removeAttribute("hidden");
                document.getElementById("bch_course1").innerHTML="METALLURGICAL & MATERIALS";
                document.getElementById("bch_course1").value=109;
            }
            if (choice==1010){
                document.getElementById("bch_course1").removeAttribute("hidden");
                document.getElementById("bch_course1").innerHTML="INTEGRATED MCA (5 YEARS)";
                document.getElementById("bch_course1").value=110;
                document.getElementById("bch_course2").removeAttribute("hidden");
                document.getElementById("bch_course2").innerHTML="REGULAR MCA (2 YEARS)";
                document.getElementById("bch_course2").value=111;
            }
        }
        //pool values
        function staff(){
             if(document.getElementById("add-faculty").style.display=='none'){
                 document.getElementById("pool").value=0;
             }
             if(document.getElementById("add-faculty").style.display=='unset'){
                 document.getElementById("pool").value=1;
            }
        }
        function plcmnt(){
             if( document.getElementById("hideme").style.display=='none'){
                document.getElementById("plcmntflag").value=0;
             }
             if(document.getElementById("hideme").style.display=='flex'){
                document.getElementById("plcmntflag").value=1;
            }
        }
        function  validatenon_teach(){
            if(document.getElementById("add-non-staff").style.display=='unset'){
                var Name=document.getElementById("nonfctly_Name");
                var position=document.getElementById("positionSelect");
                if (Name.value==''){
                Name.style.borderColor='red';
                Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please A Valid Name!",
                    icon: "warning"
                });
                Name.focus();
                return false;
                }
                else{Name.style.borderColor='rgba(0,0,0,.7)';}
                if(position.value==''){
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Choose A Position!",
                    icon: "warning"
                });
                position.focus();
                    position.style.borderColor='red';
                    return false;
                }
                else{position.style.borderColor='rgba(0,0,0,.7)';}
            }
            var phn=document.getElementById("nonfctly_phn"); 
            var Empid=document.getElementById("EmpID");
            if(Empid.value==''){
                    Empid.style.borderColor='red';
                    Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Enter A Valid ID!",
                    icon: "warning"
                });
                Empid.focus();
                    return false;
                }
            else{Empid.style.borderColor='rgba(0,0,0,.7)';}
             if ((phn.value).length != 10){
                phn.style.borderColor='red';
                Swal.fire({
                    showConfirmButton: false,
                    timer: 1800,
                    title: "Whoopsie-daisy! 💫",
                    text: "Please Enter A Valid Phone Number!",
                    icon: "warning"
                });
                phn.focus();
                return false;
             }
             else{
                phn.style.borderColor='rgba(0,0,0,.7)';
            }
             return true;
        }
</script>
<script type="text/javascript" src="loader.js"></script>
<?php
$sql="SELECT count(*) as fctly_count FROM faculty;"; 
$result=$conn->query($sql);
$row = $result->fetch_assoc();
$fctly_count = $row['fctly_count'];

$sql="SELECT count(*) as non_teaching_fctly_count FROM nonteachingstaff;"; 
$result=$conn->query($sql);
$row = $result->fetch_assoc();
$non_fctly_count = $row['non_teaching_fctly_count'];
echo"
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Teaching Saff', $fctly_count],
  ['Non Teaching Saff', $non_fctly_count]
]);

  var options = {'width':310, 'height':205};   
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>";
?>
</body>
</html>