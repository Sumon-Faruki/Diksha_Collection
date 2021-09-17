<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dataron Home</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/about.css">
    <script src="https://kit.fontawesome.com/f516eb2fbf.js" crossorigin="anonymous"></script>
    <style>
        a {
            text-decoration: none;
        }
    </style>
    <script>
        function displayLogin() {
            var box = document.getElementById("log");
            var box1 = document.getElementById("na");
            if (box.style.display === "none") {
                box.style.display = "block";
                box1.innerHTML = "Log In  <i class='fas fa-arrow-down'></i>";
            }
            else {
                box.style.display = "none";
                box1.innerHTML = "Log In  <i class='fas fa-arrow-right'></i>";
            }
        }

        function displaySignin() {
            var box = document.getElementById("sign");
            var box1 = document.getElementById("signin");
            if (box.style.display === "none") {
                box.style.display = "block";
                box1.innerHTML = "<i class='fas fa-arrow-down'>Sign In  </i>";
            }
            else {
                box.style.display = "none";
                box1.innerHTML = "<i class='fas fa-arrow-left'>Sign In</i>";
            }
        }
    </script>
</head>

<body>
<?php
    if(isset($_REQUEST['msg']))
        {echo "<div  class='w-50 mx-auto card bg-info m-4 p-4'>
        $_REQUEST[msg]
        </div>";}
    ?>

    <div class="header">
        <p style='color:white;'  >Welcome in <br></p>
        <div class="logo">
            <img src="../../images/diksha_logo.png" alt="" style="width: 120%; height: 100%;">
        </div>
        <div class="left-head">
            <p>Take a tour...</p>

            <button id="login" onclick=displayLogin() style="float: left; margin-left: 10px;" type="button"
                class="custom-btn btn-11">Log In<i class='fas fa-arrow-right'></i></button>

            <button id="signin" onclick=displaySignin() style="float: right; margin-right: 10px;" type="button"
                class="custom-btn btn-14"><i class='fas fa-arrow-left'></i>Signup</button>
        </div>
    </div>

    <!-- <div class="more">
        <button class="custom-btn btn-12"><span>It's SAP partner company. Here we store big data.</span><span>Read
                More</span></button>
    </div> -->
 

    <div class="space">

        <!-- log in div -->
        <div id="log" class="right-box-login " style="display: none;">
            <div class="arrow"></div>
            <div class=" shadow-lg card p-4 mt-4">
                <p>Enter Your Login Details</p>
                 
                <form action="3_login.php" method="POST">

                    <input type="email" required class="inp" name="email" placeholder="Enter your email"></input><br>

                    <input type="password" required name="pass" class="inp " placeholder="Enter your password."><br>

                    <button type="submit" class="btn btn-primary float 2">Log in</button>
                </form>

            </div>
        </div>

        <!-- sign in div-->
        <div id="sign" class="right-box-signin " style="display: none;">
            <div class="arrow"></div>
            <div class=" shadow-lg card p-4 mt-4">
                <p>Enter Your Sign up Details</p>
                
                <form action="2_register.php" method="POST">

                    <input type="email" required class="inp" name="email" placeholder="Enter your email"></input><br>

                    <input type="password" required name="pass" class="inp " placeholder="Enter your password."><br>

                    <button type="submit" class="btn btn-primary float 2">Sign in</button>
                </form>

            </div>
        </div>

    </div>
 


</body>

</html>