<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Levr</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="lev9.png">
<style>
@font-face {
  font-family: E;
  src: url(Agelast-mLlAm.otf);
}
@media (min-width: 340px) {
    @media (max-width: 365px) {
        body{
            background: #526d81;
            max-width: 100%;
        }
        h1{
            font-size: 24px;
            font-family: Arial;
            position: absolute;
            color: white;
            left: 7.5%;
            top: 4%;
            width: 82%;
            padding-left: 3%;
            padding-right: 0%;
            border-radius: 5px;
        }
        h3{
            font-size: 14px;
            font-family: Arial;
            position: absolute;
            text-align: center;
            left: 0%;
            top: 37%;
            width: 98.5%;
            background: #526d81;
            color: white;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border: 2px solid LightCyan;
            border-radius: 3px;
        }
        form{
            font-family: Arial;
            font-size: 14px;
            position: absolute;
            left: 0%;
            top: 19%;
            width: 101%;
            color: white;
            border: 2px solid LightCyan;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 1%;
            padding-right: 0.5%;
            border-radius: 3px;
        }
        .b1{
            position: absolute;
            left: 0%;
            top: 18.7%;
            width: 27.1%;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 15px;
            left: 0%;
            top: 53%;
            color: white;
            width: 98.4%;
            border: 2px solid LightCyan;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border-radius: 3px;
        }
        .vl {
        position: absolute;
        top: 5.6%;
        border-left: 6px solid green;
        height: 610px;
        }
        .share{
            position: absolute;
            top: 78%;
            left: 79.0%;
            font-size: 12px;
            border: 1px solid lightcyan;
            background: lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 0.3%;
            padding-bottom: 0%;
            width: 20%;
        }
        .updates{
            font-size: 14px;
            position: absolute;
            top: 78%;
            left: 0%;
            color: white;
            border: 2px solid lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1.5%;
            padding-bottom: 2%;
            width: 55%;
        }
        .bigboi{
            position: absolute;
            left: 0%;
            top: 19%;
            width: 369px;
            border: 2px solid lightcyan;
            padding-bottom: 46%;
            border-radius: 8px;
        }
    }
}
@media (min-width: 370px) {
    @media (max-width: 400px) {
        body{
            background: #526d81;
            max-width: 100%;
        }
        h1{
            font-size: 24px;
            font-family: Arial;
            position: absolute;
            color: white;
            left: 7.5%;
            top: 4%;
            width: 82%;
            padding-left: 3%;
            padding-right: 0%;
            border-radius: 5px;
        }
        h3{
            font-size: 14px;
            font-family: Arial;
            position: absolute;
            text-align: center;
            left: 0%;
            top: 35%;
            width: 95%;
            background: #526d81;
            color: white;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border: 2px solid LightCyan;
            border-radius: 3px;
        }
        form{
            font-family: Arial;
            font-size: 14px;
            position: absolute;
            left: 0%;
            top: 19%;
            width: 97.5%;
            color: white;
            border: 2px solid LightCyan;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 1%;
            padding-right: 0.5%;
            border-radius: 3px;
        }
        .b1{
            position: absolute;
            left: 0%;
            top: 18.7%;
            width: 27.1%;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 15px;
            left: 0%;
            top: 53%;
            color: white;
            width: 95%;
            border: 2px solid LightCyan;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border-radius: 3px;
        }
        .vl {
        position: absolute;
        top: 5.6%;
        border-left: 6px solid green;
        height: 610px;
        }
        .share{
            position: absolute;
            top: 78%;
            left: 75.5%;
            font-size: 12px;
            border: 1px solid lightcyan;
            background: lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 0.3%;
            padding-bottom: 0%;
            width: 20%;
        }
        .updates{
            font-size: 14px;
            position: absolute;
            top: 78.2%;
            left: 0%;
            color: white;
            border: 2px solid lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1.5%;
            padding-bottom: 1.5%;
            width: 55%;
        }
        .bigboi{
            position: absolute;
            left: 0%;
            top: 19%;
            width: 99%;
            border: 2px solid lightcyan;
            padding-bottom: 46%;
            border-radius: 8px;
        }
    }
}
@media (min-width: 270px) {
    @media (max-width: 290px) {
        body{
            background: #526d81;
            max-width: 100%;
        }
        h1{
            font-size: 20px;
            font-family: Arial;
            position: absolute;
            color: white;
            left: 3.4%;
            top: 4%;
            width: 90%;
            padding-left: 3%;
            padding-right: 0%;
            border-radius: 5px;
        }
        h3{
            font-size: 13px;
            font-family: Arial;
            position: absolute;
            text-align: center;
            left: 0%;
            top: 41%;
            width: 94.2%;
            background: #526d81;
            color: white;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border: 2px solid LightCyan;
            border-radius: 3px;
        }
        form{
            font-family: Arial;
            font-size: 11px;
            position: absolute;
            left: 0%;
            top: 19%;
            width: 97.6%;
            color: white;
            border: 2px solid LightCyan;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 0%;
            padding-right: 0.5%;
            border-radius: 3px;
        }
        .b1{
            position: absolute;
            left: 0%;
            top: 18.7%;
            width: 27.1%;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 13px;
            left: 0%;
            top: 60%;
            color: white;
            width: 94.2%;
            border: 2px solid LightCyan;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border-radius: 3px;
        }
        .vl {
        position: absolute;
        top: 5.6%;
        border-left: 6px solid green;
        height: 610px;
        }
        .share{
            position: absolute;
            top: 81%;
            left: 74.9%;
            font-size: 12px;
            border: 1px solid lightcyan;
            background: lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 0.4%;
            padding-bottom: 0%;
            width: 20%;
        }
        .updates{
            font-size: 12px;
            position: absolute;
            top: 85%;
            left: 0%;
            color: white;
            border: 2px solid lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 55%;
        }
        .bigboi{
            position: absolute;
            left: 0%;
            top: 19%;
            width: 98.2%;
            border: 2px solid lightcyan;
            padding-bottom: 50%;
            border-radius: 8px;
        }
    }
}
@media (min-width: 310px) {
    @media (max-width: 333px) {
        body{
            background: #526d81;
            max-width: 100%;
        }
        h1{
            font-size: 20px;
            font-family: Arial;
            position: absolute;
            color: white;
            left: 7.5%;
            top: 4%;
            width: 90%;
            padding-left: 3%;
            padding-right: 0%;
            border-radius: 5px;
        }
        h3{
            font-size: 13px;
            font-family: Arial;
            position: absolute;
            text-align: center;
            left: 0%;
            top: 38%;
            width: 95.2%;
            background: #526d81;
            color: white;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border: 2px solid LightCyan;
            border-radius: 3px;
        }
        form{
            font-family: Arial;
            font-size: 11px;
            position: absolute;
            left: 0%;
            top: 19%;
            width: 98.6%;
            color: white;
            border: 2px solid LightCyan;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 0%;
            padding-right: 0.5%;
            border-radius: 3px;
        }
        .b1{
            position: absolute;
            left: 0%;
            top: 18.7%;
            width: 27.1%;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 13px;
            left: 0%;
            top: 60%;
            color: white;
            width: 95.2%;
            border: 2px solid LightCyan;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border-radius: 3px;
        }
        .vl {
        position: absolute;
        top: 5.6%;
        border-left: 6px solid green;
        height: 610px;
        }
        .share{
            position: absolute;
            top: 81%;
            left: 75.5%;
            font-size: 12px;
            border: 1px solid lightcyan;
            background: lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 0.4%;
            padding-bottom: 0%;
            width: 20%;
        }
        .updates{
            font-size: 12px;
            position: absolute;
            top: 85%;
            left: 0%;
            color: white;
            border: 2px solid lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 55%;
        }
        .bigboi{
            position: absolute;
            left: 0%;
            top: 19%;
            width: 99.2%;
            border: 2px solid lightcyan;
            padding-bottom: 46%;
            border-radius: 8px;
        }
    }
}
@media (min-width: 410px) {
    @media (max-width: 420px) {
        body{
            background: #526d81;
            max-width: 100%;
        }
        h1{
            font-size: 24px;
            font-family: Arial;
            position: absolute;
            color: white;
            left: 11%;
            top: 4%;
            width: 82%;
            padding-left: 3%;
            padding-right: 0%;
            border-radius: 5px;
        }
        h3{
            font-size: 14px;
            font-family: Arial;
            position: absolute;
            text-align: center;
            left: 0%;
            top: 35%;
            width: 95.0%;
            background: #526d81;
            color: white;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border: 2px solid LightCyan;
            border-radius: 3px;
        }
        form{
            font-family: Arial;
            font-size: 14px;
            position: absolute;
            left: 0%;
            top: 19%;
            width: 97.5%;
            color: white;
            border: 2px solid LightCyan;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 1%;
            padding-right: 0.5%;
            border-radius: 3px;
        }
        .b1{
            position: absolute;
            left: 0%;
            top: 18.7%;
            width: 27.1%;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 15px;
            left: 0%;
            top: 52.8%;
            color: white;
            width: 95%;
            border: 2px solid LightCyan;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border-radius: 3px;
        }
        .vl {
        position: absolute;
        top: 5.6%;
        border-left: 6px solid green;
        height: 610px;
        }
        .share{
            position: absolute;
            top: 73%;
            left: 75.4%;
            font-size: 12px;
            border: 1px solid lightcyan;
            background: lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 0.3%;
            padding-bottom: 0%;
            width: 20%;
        }
        .updates{
            font-size: 16px;
            position: absolute;
            top: 73%;
            left: 0%;
            color: white;
            border: 2px solid lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 55%;
        }
        .bigboi{
            position: absolute;
            left: 0%;
            top: 19%;
            width: 99%;
            border: 2px solid lightcyan;
            padding-bottom: 46%;
            border-radius: 8px;
        }
    }
}
@media (min-width: 530px) {
    @media (max-width: 550px) {
        body{
            background: #526d81;
            max-width: 100%;
        }
        h1{
            font-size: 24px;
            font-family: Arial;
            position: absolute;
            color: white;
            left: 23%;
            top: 4%;
            width: 82%;
            padding-left: 3%;
            padding-right: 0%;
            border-radius: 5px;
        }
        h3{
            font-size: 14px;
            font-family: Arial;
            position: absolute;
            text-align: center;
            left: 0%;
            top: 35%;
            width: 100.0%;
            background: #526d81;
            color: white;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border: 2px solid LightCyan;
            border-radius: 3px;
        }
        form{
            font-family: Arial;
            font-size: 14px;
            position: absolute;
            left: 0%;
            top: 19%;
            width: 102.5%;
            color: white;
            border: 2px solid LightCyan;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 1%;
            padding-right: 0.5%;
            border-radius: 3px;
        }
        .b1{
            position: absolute;
            left: 0%;
            top: 18.7%;
            width: 27.1%;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 15px;
            left: 0.1%;
            top: 52.8%;
            color: white;
            width: 100%;
            border: 2px solid LightCyan;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2%;
            padding-right: 2%;
            border-radius: 3px;
        }
        .vl {
        position: absolute;
        top: 5.6%;
        border-left: 6px solid green;
        height: 610px;
        }
        .share{
            position: absolute;
            top: 73%;
            left: 80.4%;
            font-size: 12px;
            border: 1px solid lightcyan;
            background: lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 0.3%;
            padding-bottom: 0%;
            width: 20%;
        }
        .updates{
            font-size: 16px;
            position: absolute;
            top: 73%;
            left: 0%;
            color: white;
            border: 2px solid lightcyan;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 2.3%;
            padding-bottom: 2.3%;
            width: 55%;
        }
        .bigboi{
            position: absolute;
            left: 0%;
            top: 19%;
            width: 104%;
            border: 2px solid lightcyan;
            padding-bottom: 33%;
            border-radius: 8px;
        }
    }
}
@media (min-width: 1200px) {
    body{
        background: #526d81;
    }
    h1{
        font-size: 32px;
        font-family: Arial;
        position: absolute;
        left: 34.8%;
        top: 4%;
        width: 40%;
        color: white;
    }
    h3{
        font-size: 17px;
        font-family: Arial;
        position: absolute;
        left: 26.7%;
        top: 51%;
        width: 40%;
        background: LightCyan;
        padding-top: 2%;
        padding-bottom: 2%;
        padding-left: 3%;
        padding-right: 3%;
        border-radius: 0%;
    }
    form{
        font-family: Arial;
        position: absolute;
        left: 31%;
        top: 27.7%;
        border: 2px solid LightCyan;
        background: LightCyan;
        padding-top: 2%;
        padding-bottom: 2%;
        padding-left: 1%;
        padding-right: 10%;
        border-radius: 8px;
    }
    .b1{
        position: absolute;
        left: 0%;
        top: 18.7%;
        width: 27.1%;
    }
    .info{
        font-family: Arial;
        position: absolute;
        font-size: 20px;
        left: 26.5%;
        top: 75%;
        width: 40.4%;
        background: #c0fff4;
        padding-top: 2%;
        padding-bottom: 2%;
        padding-left: 3%;
        padding-right: 3%;
        border-radius: 8px;
    }
    .vl {
    position: absolute;
    top: 5.6%;
    border-left: 6px solid green;
    height: 610px;
    }
    .share{
        position: absolute;
        top: 5%;
        left: 1%;
        background: #c0fff4;
        border: 1px solid #c0fff4;
        border-radius: 10px;
        padding-left: 2%;
        padding-right: 2%;
        padding-top: 1%;
        padding-bottom: 1%;
        width: 10%;
    }
    .updates{
        position: absolute;
        top: 35%;
        left: 1%;
        background: #c0fff4;
        border: 1px solid #c0fff4;
        border-radius: 10px;
        padding-left: 2%;
        padding-right: 2%;
        padding-top: 1%;
        padding-bottom: 1%;
        width: 10%;
    }
    .bigboi{
        position: absolute;
        left: 26.5%;
        top: 22.6%;
        width: 46%;
        border: 3px solid LightCyan;
        padding-bottom: 25.1%;
        border-radius: 8px;
    }
}
@media (min-width: 600px) {
    @media (max-width: 1100px) {
        body{
            background: #526d81;
        }
        h1{
            font-size: 45px;
            font-family: Arial;
            position: absolute;
            left: 47.6%;
            top: 4%;
            width: 100%;
            color: white;
        }
        h3{
            font-size: 17px;
            font-family: Arial;
            position: absolute;
            left: 46.7%;
            top: 30%;
            width: 49.3%;
            background: LightCyan;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 3%;
            padding-right: 2.8%;
            border-radius: 5px;
        }
        form{
            font-family: Arial;
            position: absolute;
            left: 46.7%;
            top: 18.5%;
            width: 43.2%;
            color: white;
            border: 2px solid LightCyan;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2.5%;
            padding-right: 9%;
            border-radius: 8px;
        }
        .b1{
            position: absolute;
            left: 0%;
            top: 18.7%;
            width: 27.1%;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 20px;
            left: 46.9%;
            top: 45%;
            width: 48.7%;
            background: #c0fff4;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 3%;
            padding-right: 3%;
            border-radius: 8px;
        }
        .vl {
        position: absolute;
        top: 5.6%;
        border-left: 6px solid green;
        height: 610px;
        }
        .share{
            position: absolute;
            top: 3%;
            left: 1%;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 10px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 12%;
        }
        .updates{
            position: absolute;
            top: 17.7%;
            left: 1%;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 10px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 30%;
        }
        .bigboi{
            position: absolute;
            left: 46.7%;
            top: 18.5%;
            width: 54.5%;
            border: 3px solid LightCyan;
            padding-bottom: 26%;
            border-radius: 8px;
        }
    }
    @media (max-width: 800px) {
        body{
            background: #526d81;
        }
        h1{
            font-size: 35px;
            font-family: Arial;
            position: absolute;
            left: 43.4%;
            top: 4%;
            width: 100%;
            color: white;
        }
        h3{
            font-size: 17px;
            font-family: Arial;
            position: absolute;
            left: 43.7%;
            top: 32.8%;
            width: 49.3%;
            background: LightCyan;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 3%;
            padding-right: 2.8%;
            border-radius: 5px;
        }
        form{
            font-family: Arial;
            position: absolute;
            left: 43.5%;
            top: 18.5%;
            width: 43.2%;
            color: white;
            border: 2px solid LightCyan;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 2.5%;
            padding-right: 9%;
            border-radius: 8px;
        }
        .b1{
            position: absolute;
            left: 0%;
            top: 18.7%;
            width: 27.1%;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 20px;
            left: 43.5%;
            top: 50%;
            width: 49.3%;
            background: #c0fff4;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 3%;
            padding-right: 3%;
            border-radius: 8px;
        }
        .vl {
        position: absolute;
        top: 5.6%;
        border-left: 6px solid green;
        height: 610px;
        }
        .share{
            position: absolute;
            top: 3%;
            left: 1%;
            font-size: 15px;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 10px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 12%;
        }
        .updates{
            position: absolute;
            top: 17.7%;
            left: 1%;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 10px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 30%;
        }
        .bigboi{
            position: absolute;
            left: 43.5%;
            top: 18.5%;
            width: 54.5%;
            border: 3px solid LightCyan;
            padding-bottom: 35%;
            border-radius: 8px;
        }
    }

}

</style>    
</head>
<body>
<?php

?>
<div class="contain">
<h1>Analyze your competitors</h1>
<div class="bigboi">
</div>
<h3>Enter the URL to the website, blog post or other form of webpage which ranks for your target keyword, then enter your target keyword!</h3>
<form id="sd" action="scraper.php" method="post" class="scan"><b>
URL: <input type="text" name="url" style="width: 250px;" class="options" placeholder="https://searchengineland.com/guide/what-is-seo"><br>
<br>
Keyword: <input type="text" name="keyword" style="width: 250px;" class="options" placeholder="SEO"><br>
    <button id="go" action="scraper.php" style="position: absolute; font-size: 15px; top: 110%; left: 0.1%; width: 100px; height: 35px; font-family: Arial; background: Aquamarine; border: 2px solid aquamarine; border-radius: 4px;" type="submit">Submit</button></b>
</form>
<div class="info"><b>Use this tool to analyze how many times your target keyword is repeated within a website, blog or other form of webpage that ranks for your target keyword to see how you stack up against your competitors SEO wise.</b></div>
<div class="updates"><i>* This tool was released on July 18th 2021, so it's functionalities are quite basic at the moment. Follow <a alt="the levr twitter account" style="color: dodgerblue;" href="https://twitter.com/Levr_Analytics">this twitter account</a> for updates on new features</i></div>
<div class="share">
<b>Share this on:</b>
</br>
</br>
<a href="https://twitter.com/share?url=https://levr.herokuapp.com/&text=EEEEEE" style="color: dodgerblue;">
    Twitter
</a>
</br>
<!-- Facebook (url) -->
<a href="https://www.facebook.com/sharer/sharer.php?u=https://levr.herokuapp.com/" style="color: royalblue;">
    Facebook
</a>
</br>
<!-- Reddit (url, title) -->
<a href="https://reddit.com/submit?url=https://levr.herokuapp.com/&title=EEEE_EEEE" style="color: orange;"> 
    Reddit
</a>
</br>
<!-- LinkedIn (url, title, summary, source url) -->
<a href="https://www.linkedin.com/shareArticle?url=https://levr.herokuapp.com/" style="color: dodgerblue;"">
    LinkedIn
</a>
</br>
<!-- Email (subject, body) -->
<a href="mailto:?subject=<SUBJECT>&body=<BODY>" style="color: tan;">
    Email
</a>
</div>
</div>
</body>
</html>