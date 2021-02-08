<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Human Readable format</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }
        p {font-size: 16px;}
        .margin {margin-bottom: 45px;}
        .bg-1 {
            background-color: #1abc9c; /* Green */
            color: #ffffff;
        }
        .bg-2 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }
        .bg-3 {
            background-color: #ffffff; /* White */
            color: #555555;
        }
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }
        .navbar-nav  li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">COMP2001 Part 2</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="HomePage.php">Home Page</a> </li> </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid bg-2 text-center">
    <h3 class="margin">More About the Project Vision</h3>
    <p> This linked data application has been created in PHP, HTML, a CSS style sheet  along with bootstrap from W3schools.com to display the local nature reserves in and around Plymouth. This information was chosen
    from the Data Place Plymouth website <a href="http://www.dataplymouth.co.uk/datasets">www.dataplymouth.co.uk</a> as a CSV file format and is displayed in the form of a simple table that can be read by humans. The same file
    has also been used to be displayed as machine readable format using JavaScript and PHP functions.</p>
    </a>
</div>

<footer class="container-fluid bg-4 text-center">
    <p> Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p>
    <p> 2021 School of Computing, Science and Mathematics</p>
    <p> Bootstrap Theme Edited by Thomas Gardner </p>
    <P> Currently Studying BSc (HONS) Studying Computing & Software Development Stage 2 </P>
</footer>
</body>
</html>
