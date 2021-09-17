<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../unive/bootstrap.css">
</head>

<body style="background-color: rgb(166, 166, 209);">

    <div class="login card mx-auto w-25 shadow mt-5 ">

        <p class="bg-light" style="text-align: center;">Enter Your login Details</p>

        <?php
            if(isset($_REQUEST['msg']))
                {echo "<div style='color:white;text-align:center;'>
                $_REQUEST[msg]
                </div>";}
        ?>

        <form action="login-check.php" method="POST">
            <input style="text-align: center;" class="w-100" type="email" name="em" placeholder="Enter your email"><br>
            <input style="text-align: center;" name="pwd" class="w-100" type="password" placeholder="Enter your password"><br>
            <button style="text-align: center;" class="w-100" type="submit">Login</button>
        </form>

    </div>

</body>
</html>