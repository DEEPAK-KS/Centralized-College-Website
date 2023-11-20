<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="head.jpg">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">
        <?php
         session_start ();
         if(isset($_SESSION['admin'])){
            if( $_SESSION['admin']==1){
                header("Location: adminpg.php");
            }
         }
        ?>
    <style>
        ::-webkit-scrollbar {
            width: 0px;
        }
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("admin.jpg");
            background-size: 220vh 100vh;
            background-repeat: no-repeat;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            display: flex;
        }

        .login {
            background: rgba(225, 255, 255, 0.0);
            width: 350px;
            height: 390px;
            color: #ffffff;
            border-radius: 30px;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            padding: 30px 40px;
            transition: 0.5s;
        }

        .login:hover {
            box-shadow: 0 0 20px #333;
            background: rgba(225, 255, 255, .1);
        }

        .login h1 {
            padding-top: 21px;
            font-size: 36px;
            text-align: center;
        }

        .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            background: transparent;
            margin: 30px 0;
        }

        .input-box input {
            width: 100%;
            content: "";
            padding-left: 10px;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: #ffffff;
        }

        .input-box input::placeholder {
            color: #ffffff;
        }

        .input-box svg {
            position: absolute;
            right: 20px;
            color: black;
            top: 50%;
            transform: translateY(-50%)
        }

        .login a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
        }

        .login a:hover {
            text-decoration: underline;
        }

        .back:hover svg {
            animation: shake 0.5s infinite;
        }

        @keyframes shake {
            0% {
                transform: translate(0px, 0px) rotate(0deg);
            }

            25% {
                transform: translate(1px, 1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, -1px) rotate(-1deg);
            }

            75% {
                transform: translate(2px, -1px) rotate(2deg);
            }

            100% {
                transform: translate(-1px, 1px) rotate(-1deg);
            }
        }

        .link {
            display: flex;
            justify-content: space-between;
        }

        .cta {
            position: relative;
            margin: auto;
            padding: 12px 18px;
            transition: all 0.2s ease;
            border: none;
            background: none;
            width: 100%;
        }

        .cta:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            border-radius: 50px;
            background: #fff;
            width: 45px;
            height: 45px;
            transition: all 0.3s ease;
        }

        .cta span {
            position: relative;
            font-family: "Ubuntu", sans-serif;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0.05em;
            color: black;
        }
        .cta:hover span{color: #fff;}
        .cta svg {
            position: relative;
            top: 0;
            margin-left: 10px;
            fill: none;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke: #ffffff;
            stroke-width: 2;
            transform: translateX(-5px);
            transition: all 0.3s ease;
        }

        .cta:hover:before {
            width: 100%;
            background: rgba(0, 0, 0, 0.3);
        }

        .cta:hover svg {
            transform: translateX(0);
        }

        .cta:active {
            transform: scale(0.95);
        }
    </style>
</head>

<body>
    <form action="jumpuser.php" method="POST" id="myForm" name="myForm" onsubmit="return validate();">
        <div class="login">
            <input type="hidden" name="pool">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" id="username" placeholder="User Name" name="user">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-gear" viewBox="0 0 16 16">
                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                </svg>
            </div>
            <div class="input-box">
                <input type="password" id="password" placeholder="Password" name="pswd">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z"/>
                </svg>
            </div>

            <div class="link">
                <a href="#">Forgot Password?</a>
                <div>
                    <a href="register.html" class="register-show">New? &nbsp; Register</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                        <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                      </svg>
                </div>
            </div>
            <div class="submitbtn">
                <button class="cta" type="submit" name="submit">
                    <span>Login</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </button>
                <div class="back">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg>
                    <a href="home.php">Back To Home</a>
                </div>
            </div>
        </div>
    </form>
    <script>
        function validate() {
            var uid = document.myForm.user;
            var pswd = document.myForm.pswd;
            var ActionNew=document.getElementById("myForm");
            if (uid.value == "") {
                uid.style.borderColor = "red";
                uid.focus();
                Swal.fire({
                    showConfirmButton: false,
                    timer: 1500,
                    title: "!!Error!!",
                    text: "Please Enter the User Name!",
                    icon: "question"
                });
                return false;
            } else {
                uid.style.border = "2px solid rgba(255, 255, 255, .2)"; // Reset border color
            }

            if (pswd.value == "") {
                Swal.fire({
                    showConfirmButton: false,
                    timer: 1500,
                    title: "!!Error!!",
                    text: "Please Enter the Password!",
                    icon: "warning"
                });
                pswd.focus();
                pswd.style.borderColor = "red";
                return false;
            }
            else {
                pswd.style.border = "2px solid rgba(255, 255, 255, .2)"; // Reset border color
            }
            if (uid.value.toUpperCase() == 'ROOT') {
                    ActionNew.action = 'jumptoadmin.php';
                } 
            return true;
        }
    </script>
</body>
<?php
if(isset($_SESSION['userflag'])){
    if( $_SESSION['userflag']==0){ 
        $_SESSION['userflag']=1;
        echo'
        <script>
        Swal.fire({
        title: "Oops..",
        text: "Invalid Credentials!",
        icon: "error"
        });
        </script>
        ' ;
    }
 }
?>
</html>
