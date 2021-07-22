<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Levr</title>
    <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <link rel="icon" href="lev9.png">
<style>
    h2{
        font-size: 22px;
        position: absolute;
        left: 5%;
        top: 1%;
        text-align: center;
        padding-left: 4.35%;
        padding-right: 4.35%;
        padding-top: 2%;
        padding-bottom: 2%;
        background: #c0fff4;
        width: 80%;
        z-index: 5;
        border: 2px solid #c0fff4;
        border-radius: 5px;
    }
    .share{
        position: absolute;
        top: 25%;
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
    .next{
        font-size: 22px;
        position: absolute;
        left: 17%;
        top: 35%;
        background: #c0fff4;
        padding-left: 17.38%;
        padding-right: 17.38%;
        padding-top: 2%;
        padding-bottom: 2%;
        z-index: 5;
        border: 2px solid slategray;
        border-radius: 5px 5px 0px 0px;
    }
    .steps{
        font-size: 25px;
        position: absolute;
        left: 17%;
        top: 47%;
        width: 63.6%;
        background: lightcyan;
        padding-left: 2%;
        padding-top: 2%;
        padding-bottom: 6%;
        z-index: 5;
        border: 2px solid slategray;
        border-radius: 0px 0px 5px 5px;
    }
    .info{
        font-family: Arial;
        position: absolute;
        font-size: 20px;
        left: 0%;
        top: 0%;
        width: 94%;
        background: #526d81;
        padding-top: 2%;
        padding-bottom: 51.8%;
        padding-left: 3%;
        padding-right: 3%;
    }
    hr{
        position: absolute;
        left: 25%;
        top: 70%;
        z-index: 6;
        color: black;
    }
@media (min-width: 270px) {
    @media (max-width: 290px) {
        h2{
            font-size: 13px;
            position: absolute;
            left: 5%;
            top: 1%;
            text-align: center;
            background: #c0fff4;
            padding-left: 4.35%;
            padding-right: 4.35%;
            padding-top: 2%;
            padding-bottom: 2%;
            width: 80%;
            z-index: 5;
            border: 2px solid #c0fff4;
            border-radius: 3px;
        }
        .share{
            position: absolute;
            font-size: 12px;
            top: 70%;
            left: 5%;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 30%;
        }
        .next{
            font-size: 12px;
            position: absolute;
            left: 4.7%;
            top: 20%;
            background: #c0fff4;
            padding-left: 6.3%;
            padding-right: 6.3%;
            padding-top: 2%;
            padding-bottom: 2%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 3px 3px 0px 0px;
        }
        .steps{
            font-size: 12px;
            position: absolute;
            left: 4.7%;
            top: 25%;
            width: 87.5%;
            background: lightcyan;
            padding-left: 2%;
            padding-top: 2%;
            padding-bottom: 6%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 0px 0px 3px 3px;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 20px;
            left: 0%;
            top: 0%;
            width: 94%;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 215%;
            padding-left: 3%;
            padding-right: 3%;
        }
        hr{
            position: absolute;
            left: 25%;
            top: 70%;
            z-index: 6;
            color: black;
        }
    }
}
@media (min-width: 310px) {
    @media (max-width: 333px) {
        h2{
            font-size: 13px;
            position: absolute;
            left: 5%;
            top: 1%;
            text-align: center;
            background: #c0fff4;
            padding-left: 4.35%;
            padding-right: 4.35%;
            padding-top: 2%;
            padding-bottom: 2%;
            width: 80%;
            z-index: 5;
            border: 2px solid #c0fff4;
            border-radius: 3px;
        }
        .share{
            position: absolute;
            font-size: 12px;
            top: 90%;
            left: 5%;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 30%;
        }
        .next{
            font-size: 14px;
            position: absolute;
            left: 4.7%;
            top: 25%;
            background: #c0fff4;
            padding-left: 5.5%;
            padding-right: 5.5%;
            padding-top: 2%;
            padding-bottom: 2%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 3px 3px 0px 0px;
        }
        .steps{
            font-size: 15px;
            position: absolute;
            left: 4.7%;
            top: 30%;
            width: 87.5%;
            background: lightcyan;
            padding-left: 2%;
            padding-top: 2%;
            padding-bottom: 6%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 0px 0px 3px 3px;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 20px;
            left: 0%;
            top: 0%;
            width: 94%;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 215%;
            padding-left: 3%;
            padding-right: 3%;
        }
        hr{
            position: absolute;
            left: 25%;
            top: 70%;
            z-index: 6;
            color: black;
        }
    }
}
@media (min-width: 340px) {
    @media (max-width: 365px) {
        h2{
            font-size: 14px;
            position: absolute;
            left: 5%;
            top: 1%;
            text-align: center;
            background: #c0fff4;
            padding-left: 4.35%;
            padding-right: 4.35%;
            padding-top: 2%;
            padding-bottom: 2%;
            width: 80%;
            z-index: 5;
            border: 2px solid #c0fff4;
            border-radius: 3px;
        }
        .share{
            position: absolute;
            top: 74%;
            left: 5.3%;
            font-size: 14px;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 30%;
        }
        .next{
            font-size: 14px;
            position: absolute;
            left: 5.3%;
            top: 24%;
            text-align: center;
            width: 82.3%;
            background: #c0fff4;
            padding-left: 3%;
            padding-right: 3%;
            padding-top: 2%;
            padding-bottom: 2%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 3px 3px 0px 0px;
        }
        .steps{
            font-size: 15px;
            position: absolute;
            left: 5.3%;
            top: 29.0%;
            width: 86.3%;
            background: lightcyan;
            padding-left: 2%;
            padding-top: 2%;
            padding-bottom: 6%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 0px 0px 3px 3px;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 20px;
            left: 0%;
            top: 0%;
            width: 94%;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 215%;
            padding-left: 3%;
            padding-right: 3%;
        }
        hr{
            position: absolute;
            left: 25%;
            top: 70%;
            z-index: 6;
            color: black;
        }
    }
}
@media (min-width: 370px) {
    @media (max-width: 400px) {
        @media (max-height: 700px) {
            h2{
                font-size: 14px;
                position: absolute;
                left: 5%;
                top: 1%;
                text-align: center;
                background: #c0fff4;
                padding-left: 4.35%;
                padding-right: 4.35%;
                padding-top: 2%;
                padding-bottom: 2%;
                width: 80%;
                z-index: 5;
                border: 2px solid #c0fff4;
                border-radius: 3px;
            }
            .share{
                position: absolute;
                top: 74%;
                left: 5.3%;
                font-size: 14px;
                background: #c0fff4;
                border: 1px solid #c0fff4;
                border-radius: 3px;
                padding-left: 2%;
                padding-right: 2%;
                padding-top: 1%;
                padding-bottom: 1%;
                width: 30%;
            }
            .next{
                font-size: 14px;
                position: absolute;
                left: 5.3%;
                top: 24%;
                text-align: center;
                width: 82.3%;
                background: #c0fff4;
                padding-left: 3%;
                padding-right: 3%;
                padding-top: 2%;
                padding-bottom: 2%;
                z-index: 5;
                border: 2px solid slategray;
                border-radius: 3px 3px 0px 0px;
            }
            .steps{
                font-size: 15px;
                position: absolute;
                left: 5.3%;
                top: 30.5%;
                width: 86.3%;
                background: lightcyan;
                padding-left: 2%;
                padding-top: 2%;
                padding-bottom: 6%;
                z-index: 5;
                border: 2px solid slategray;
                border-radius: 0px 0px 3px 3px;
            }
            .info{
                font-family: Arial;
                position: absolute;
                font-size: 20px;
                left: 0%;
                top: 0%;
                width: 94%;
                background: #526d81;
                padding-top: 2%;
                padding-bottom: 215%;
                padding-left: 3%;
                padding-right: 3%;
            }
            hr{
                position: absolute;
                left: 25%;
                top: 70%;
                z-index: 6;
                color: black;
            }
        }
        @media (max-height: 840px) {
            h2{
                font-size: 14px;
                position: absolute;
                left: 5%;
                top: 1%;
                text-align: center;
                background: #c0fff4;
                padding-left: 4.35%;
                padding-right: 4.35%;
                padding-top: 2%;
                padding-bottom: 2%;
                width: 80%;
                z-index: 5;
                border: 2px solid #c0fff4;
                border-radius: 3px;
            }
            .share{
                position: absolute;
                top: 64%;
                left: 5.3%;
                font-size: 14px;
                background: #c0fff4;
                border: 1px solid #c0fff4;
                border-radius: 3px;
                padding-left: 2%;
                padding-right: 2%;
                padding-top: 1%;
                padding-bottom: 1%;
                width: 30%;
            }
            .next{
                font-size: 14px;
                position: absolute;
                left: 5.3%;
                top: 19%;
                text-align: center;
                width: 82.3%;
                background: #c0fff4;
                padding-left: 3%;
                padding-right: 3%;
                padding-top: 2%;
                padding-bottom: 2%;
                z-index: 5;
                border: 2px solid slategray;
                border-radius: 3px 3px 0px 0px;
            }
            .steps{
                font-size: 15px;
                position: absolute;
                left: 5.3%;
                top: 23.0%;
                width: 86.3%;
                background: lightcyan;
                padding-left: 2%;
                padding-top: 2%;
                padding-bottom: 6%;
                z-index: 5;
                border: 2px solid slategray;
                border-radius: 0px 0px 3px 3px;
            }
            .info{
                font-family: Arial;
                position: absolute;
                font-size: 20px;
                left: 0%;
                top: 0%;
                width: 94%;
                background: #526d81;
                padding-top: 2%;
                padding-bottom: 215%;
                padding-left: 3%;
                padding-right: 3%;
            }
            hr{
                position: absolute;
                left: 25%;
                top: 70%;
                z-index: 6;
                color: black;
            }
        }
    }
}
@media (min-width: 410px) {
    @media (max-width: 413px) {
        h2{
            font-size: 15px;
            position: absolute;
            left: 5%;
            top: 1%;
            text-align: center;
            background: #c0fff4;
            padding-left: 4.35%;
            padding-right: 4.35%;
            padding-top: 2%;
            padding-bottom: 2%;
            width: 80%;
            z-index: 5;
            border: 2px solid #c0fff4;
            border-radius: 3px;
        }
        .share{
            position: absolute;
            top: 65%;
            left: 5%;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 30%;
        }
        .next{
            font-size: 16px;
            position: absolute;
            left: 4.7%;
            top: 22%;
            background: #c0fff4;
            padding-left: 9.8%;
            padding-right: 9.8%;
            padding-top: 2%;
            padding-bottom: 2%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 3px 3px 0px 0px;
        }
        .steps{
            font-size: 15px;
            position: absolute;
            left: 4.7%;
            top: 26.7%;
            width: 87.5%;
            background: lightcyan;
            padding-left: 2%;
            padding-top: 2%;
            padding-bottom: 6%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 0px 0px 3px 3px;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 20px;
            left: 0%;
            top: 0%;
            width: 94%;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 215%;
            padding-left: 3%;
            padding-right: 3%;
        }
        hr{
            position: absolute;
            left: 25%;
            top: 70%;
            z-index: 6;
            color: black;
        }
    }
}
@media (min-width: 414px) {
    @media (max-width: 420px) {
        h2{
            font-size: 15px;
            position: absolute;
            left: 5%;
            top: 1%;
            text-align: center;
            background: #c0fff4;
            padding-left: 4.35%;
            padding-right: 4.35%;
            padding-top: 2%;
            padding-bottom: 2%;
            width: 80%;
            z-index: 5;
            border: 2px solid #c0fff4;
            border-radius: 3px;
        }
        .share{
            position: absolute;
            top: 65%;
            left: 5%;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 30%;
        }
        .next{
            font-size: 16px;
            position: absolute;
            left: 4.7%;
            top: 22%;
            background: #c0fff4;
            padding-left: 10.05%;
            padding-right: 10.05%;
            padding-top: 2%;
            padding-bottom: 2%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 3px 3px 0px 0px;
        }
        .steps{
            font-size: 15px;
            position: absolute;
            left: 4.7%;
            top: 26.7%;
            width: 87.5%;
            background: lightcyan;
            padding-left: 2%;
            padding-top: 2%;
            padding-bottom: 6%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 0px 0px 3px 3px;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 20px;
            left: 0%;
            top: 0%;
            width: 94%;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 215%;
            padding-left: 3%;
            padding-right: 3%;
        }
        hr{
            position: absolute;
            left: 25%;
            top: 70%;
            z-index: 6;
            color: black;
        }
    }
}
@media (min-width: 530px) {
    @media (max-width: 550px) {
        h2{
            font-size: 15px;
            position: absolute;
            left: 5.2%;
            top: 1%;
            text-align: center;
            background: #c0fff4;
            padding-left: 4.35%;
            padding-right: 4.35%;
            padding-top: 2%;
            padding-bottom: 2%;
            width: 80%;
            z-index: 5;
            border: 2px solid #c0fff4;
            border-radius: 3px;
        }
        .share{
            position: absolute;
            top: 65%;
            left: 5.2%;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 30%;
        }
        .next{
            font-size: 16px;
            position: absolute;
            left: 4.9%;
            top: 22%;
            background: #c0fff4;
            padding-left: 18.2%;
            padding-right: 18.2%;
            padding-top: 2%;
            padding-bottom: 2%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 3px 3px 0px 0px;
        }
        .steps{
            font-size: 15px;
            position: absolute;
            left: 4.9%;
            top: 26.7%;
            width: 87.5%;
            background: lightcyan;
            padding-left: 2%;
            padding-top: 2%;
            padding-bottom: 6%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 0px 0px 3px 3px;
        }
        .info{
            font-family: Arial;
            position: absolute;
            font-size: 20px;
            left: 0%;
            top: 0%;
            width: 94%;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 215%;
            padding-left: 3%;
            padding-right: 3%;
        }
        hr{
            position: absolute;
            left: 25%;
            top: 70%;
            z-index: 6;
            color: black;
        }
    }
}
@media (min-width: 600px) {
    @media (max-width: 1100px) {
        h2{
            font-size: 15px;
            position: absolute;
            left: 5.5%;
            top: 1%;
            text-align: center;
            background: #c0fff4;
            padding-left: 4.35%;
            padding-right: 4.35%;
            padding-top: 2%;
            padding-bottom: 2%;
            width: 80%;
            z-index: 5;
            border: 2px solid #c0fff4;
            border-radius: 3px;
        }
        .share{
            position: absolute;
            top: 41.5%;
            left: 5%;
            font-size: 14px;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 20%;
        }
        .next{
            font-size: 16px;
            position: absolute;
            left: 5.2%;
            top: 15%;
            background: #c0fff4;
            padding-left: 30.75%;
            padding-right: 30.75%;
            padding-top: 2%;
            padding-bottom: 2%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 3px 3px 0px 0px;
        }
        .steps{
            font-size: 15px;
            position: absolute;
            left: 5.2%;
            top: 19.7%;
            width: 87.5%;
            background: lightcyan;
            padding-left: 2%;
            padding-top: 2%;
            padding-bottom: 6%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 0px 0px 3px 3px;
        }
        .info{
            position: absolute;
            font-size: 20px;
            left: 0%;
            top: 0%;
            width: 94%;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 215%;
            padding-left: 3%;
            padding-right: 3%;
        }
        hr{
            position: absolute;
            left: 25%;
            top: 70%;
            z-index: 6;
            color: black;
        }
    }
    @media (max-width: 800px) {
        h2{
            font-size: 15px;
            position: absolute;
            left: 5%;
            top: 1%;
            text-align: center;
            background: #c0fff4;
            padding-left: 4.35%;
            padding-right: 4.35%;
            padding-top: 2%;
            padding-bottom: 2%;
            width: 80%;
            z-index: 5;
            border: 2px solid #c0fff4;
            border-radius: 3px;
        }
        .share{
            position: absolute;
            top: 55%;
            left: 5%;
            background: #c0fff4;
            border: 1px solid #c0fff4;
            border-radius: 3px;
            padding-left: 2%;
            padding-right: 2%;
            padding-top: 1%;
            padding-bottom: 1%;
            width: 20%;
        }
        .next{
            font-size: 16px;
            position: absolute;
            left: 4.7%;
            top: 22%;
            background: #c0fff4;
            padding-left: 26.05%;
            padding-right: 26.05%;
            padding-top: 2%;
            padding-bottom: 2%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 3px 3px 0px 0px;
        }
        .steps{
            font-size: 15px;
            position: absolute;
            left: 4.7%;
            top: 26.7%;
            width: 87.5%;
            background: lightcyan;
            padding-left: 2%;
            padding-top: 2%;
            padding-bottom: 6%;
            z-index: 5;
            border: 2px solid slategray;
            border-radius: 0px 0px 3px 3px;
        }
        .info{
            position: absolute;
            font-size: 20px;
            left: 0%;
            top: 0%;
            width: 94%;
            background: #526d81;
            padding-top: 2%;
            padding-bottom: 215%;
            padding-left: 3%;
            padding-right: 3%;
        }
        hr{
            position: absolute;
            left: 25%;
            top: 70%;
            z-index: 6;
            color: black;
        }
    }
}
</style>
<?php
require 'vendor/autoload.php';
use Goutte\Client;
$client = new Client();
$url = $_POST["url"];
$u2 = "'$url'";
$key = $_POST["keyword"];
$crawler = $client->request('GET', $url);
//$fullPageHtml = $crawler->html();
/*try{
    $pageH1 = $crawler->filter('h1')->text();
    //echo($pageH1);
    echo substr_count($pageH1, 'python');
}
catch(exception $e){
}
try{
    $pageH2 = $crawler->filter('h2')->text();
    //echo($pageH2);
    echo substr_count($pageH2, 'python');
}
catch(exception $e){
}
try{
    $pageH3 = $crawler->filter('h3')->text();
    //echo($pageH3);
    echo substr_count($pageH3, 'python');
}
catch(exception $e){
}
try{
    $pageH4 = $crawler->filter('h4')->text();
    //echo($pageH4);
    echo substr_count($pageH4, 'python');
}
catch(exception $e){
}
try{
    $pageH5 = $crawler->filter('h5')->text();
    //echo($pageH5);
    echo substr_count($pageH5, 'python');
}
catch(exception $e){
}
try{
    $pageH6 = $crawler->filter('h6')->text();
    //echo($pageH6);
    echo substr_count($pageH6, 'python');
}
catch(exception $e){
}
try{
    $pagediv = $crawler->filter('div')->text();
    echo($pagediv);
    echo substr_count($pagediv, 'python');
}
catch(exception $e){
}
try{
    $pageli = $crawler->filter('li')->text();
    echo($pageli);
    echo substr_count($pageli, 'python');
}
catch(exception $e){
}*/
try{
    $pagestrong = $crawler->filter('body')->text();
    echo("<h2> $key was mentioned ");
    if($key == strtoupper($key)){
        $count = substr_count($pagestrong, $key) + substr_count($pagestrong, strtolower($key)) + substr_count($pagestrong, ucwords(strtolower($key)));
    }
    else{
        $count = substr_count($pagestrong, $key) + substr_count($pagestrong, strtoupper($key)) + substr_count($pagestrong, ucwords($key));
    }
    echo($count);
    echo(" times in $url</h2>");
}
catch(exception $e){
}
?>
<div class="info"></div>
<div class="next"><b>Now try to compare this to your webpage!</b></div>
<div class="steps">
<ul>
<li style="width: 70%;">Analyze your webpage on your target keyword and compare the results with your competitor's</li>
</br>
<li style="width: 70%;">If you're webpage is less optimized for your target keyword than your competitor's, try to find ways you can improve your discoverability by mentioning more relevant keywords</li>
</ul>
</div>
<div class="share">
<b>Share this tool on:</b>
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
</body>
</html>