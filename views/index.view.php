<?php require("./views/partials/header.php")  ?>
<div class="">
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /*body part*/
        body { 
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        }

        /*header part*/
        .header-image {
            background-image: url('bgimg.jfif');
            background-size: cover; 
            background-position: center;
            height: 750px;
        }

        * {box-sizing: border-box;}

        .header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 20px 10px;
        }

        .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px; 
        line-height: 25px;
        border-radius: 4px;
        }

        .header a.logo {
        font-size: 25px;
        font-weight: bold;
        margin-left:10%
        }

        .header a:hover {
        background-color: #ddd;
        color: black;
        }

        .header a.active {
        background-color: dodgerblue;
        color: white;
        }

        .header-right {
        float: right;
        padding-right:10%;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }
            
            .header-right {
                float: none;
            }
        }
    </style>

        <body>
            <div class="header">
            <a href="#default" class="logo">Logo</a>
            <div class="header-right">
                <a class="active" href="#home">GALLARY</a>
                <a href="#about">ABOUT</a>
                <a href="#contact_us">CONTACT US</a>
                <a href="#register">REGISTER</a>
                <a href="#sign_up">SIGN UP</a>
            </div>
            </div>
            <div class="header-image"></div>

        </body>
    </div>
</div>
<?php require("./views/partials/header.php")  ?>