<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
        if(isset($_REQUEST['title'])){
            print "<title>$_REQUEST[title]</title>";
        }
    ?>
    <link rel="stylesheet" href="../../unive/bootstrap.css">
    <link rel="stylesheet" href="../include/template.css">
</head>

<body>
    <div class="head">
        <p>Welcome Admin</p>
        <a href="../1_log/logout.php">Log out</a>
    </div>
        <?php
            if(isset($_REQUEST['title'])){
                print "<div class='mx-auto w-50 card shadow text-center'>$_REQUEST[title]</div>";
            }
        ?>
    <section>
        <div class="left_content">
            <ol>