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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/4.1.2/papaparse.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css%22%3E">
</head>

<body>

<style>
    .w3-table{
        margin-left: auto;
        margin-right: auto;
    }
    body {
        font: 20px Montserrat, sans-serif;
        line-height: 1.8;
        color: black;
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
    table {
        border-collapse: collapse;
        border: 2px black solid;
        font: 12px sans-serif;
    }

    td {
        border: 1px black solid;
        padding: 5px;
    }
</style>
<div class="w3-table">
    <script>
        function arrayToTable(tableData) {
            var table = $('<table class="w3-table"></table>');
            $(tableData).each(function (i, rowData) {
                var row = $('<tr></tr>');
                $(rowData).each(function (j, cellData) {
                    row.append($('<td>'+cellData+'</td>'));
                });
                table.append(row);
            });
            return table;
        }

        $.ajax({
            type: "GET",
            url: "local-nature-reserves.csv",
            success: function (data) {
                $('body').append(arrayToTable(Papa.parse(data).data));
            }
        });

    </script>
</div>


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
                <li><a href="HomePage.php">Home Page</a> </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid bg-2 text-center">
    <h3 class="margin">Nature Reserves</h3>
    <p> Below is a list of locations.... </p>
    <a href="#" class="btn btn-default btn-lg">
    </a>
</div>
</body>
