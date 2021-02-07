<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Simply Me</title>
    <meta charset="utf-8">
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

<!-- Navbar -->
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
                <li><a href="https://plymouth.thedata.place/dataset/local-nature-reserves/resource/0aa9f4f9-2db2-4e9e-9e1b-be50e7b80d09">Original DataSet</a></li>
                <li><a href="data.php">Human Readable Data</a></li>
                <li><a href="../../Assets/Entity/index.php"> Machine Readable Page</a> </li>
                <li><a href="ProjectVision.php">Project Vision</a> </li>
            </ul>
        </div>
    </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
    <h3 class="margin">Welcome to My PHP Application Home Page!</h3>
    <img src="Me.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Logo" width="350" height="350">
    <h3>Please scroll down to view more!</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    <h3 class="margin">What is the project vision?</h3>
    <p> Using the PHP coding language, I have managed to display a csv file storing information about the Plymouth Nature Reserve location in Machine readable data as Json-LD and also in Human readable format as a chart.
    Please use the search button to navigate back to top of page where you will see the provided link to the respective pages.</p>
    <a href="#" class="btn btn-default btn-lg">
        <span class="glyphicon glyphicon-search"></span> Find Out More
    </a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Find out more</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <p>Swing hanging from sycamore tree in lawn, Rosa ‘Iceberg’</p>
            <img src="../../api/Public/img/pic1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
            <p>Forder Valley is a Local Nature Reserve in the northeast of Plymouth, next to the communities of Leigham, Estover and Eggbuckland. It's a good sized green space (28 hectares) where you can enjoy walking and playing as well as exploring nature.</p>
            <img src="../../api/Public/img/pic2.png" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
            <p>Plym Valley Trail, Plymbridge Woods is a giant swathe of lush woodland to the east of the city, perfect for cycling and walking.</p>
            <img src="../../api/Public/img/pic3.png" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
    <p> Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p>
    <p> 2021 School of Computing, Science and Mathematics</p>
    <p> Bootstrap Theme Edited by Thomas Gardner </p>
    <P> Currently Studying BSc (HONS) Studying Computing & Software Development Stage 2 </P>
</footer>

</body>
</html>
