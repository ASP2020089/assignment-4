
<?php

session_start();


?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Personal Portfolio Website</title>
        <link rel="stylesheet" href="style6.css">
       <script src="https://kit.fontawesome.com/8f77c47cbf.js" crossorigin="anonymous"></script>

       <style>
       

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover:not(.active) {
        background-color: #111;
        }

        .active {
        background-color:  black;
        }
 /* Css for login form */
  input[type=text], input[type=password], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
    
            button {
            width: 100%;
            background-color:  rgb(238, 5, 180);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }
    
            input[type=submit]:hover {
            background-color: #45a049;
            }
    
            .form{
                width:70%;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
    
            }
    
            .error{
                color : red;
                border :1px solid red;
                padding : 12px;
                font-size :22px;
                margin-bottom : 10px;
                font-weight: bold;
                background-color: black;
    
            }
    </style>

    </head>
    <body>
        <div id="header">
            <div id="container">
                <nav>
                    <p class="logo">Rasika</p>
                    <ul id="sidemenu">
                    <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <i class="fas fa-times" onclick="closemenu()"></i>

                        <?php
    if (isset($_SESSION["username"])){
        echo '<li style="float:right"><a href="includes/logout.inc.php">Logout</a> </li>';
        echo '<li style="float:right"><a href="profile.php">'.$_SESSION["username"]. '</a> </li>';
       
       
    }else
        echo '<li style="float:right"><a href="login.php">login</a></li>';
    ?>
                    </ul>

                    <div class="container" style="margin:20px;">