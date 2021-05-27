<!DOCTYPE html>
<html lang="en">
<title>Consumer Advice Portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-black.css">
    <?php
    include_once("header.php");
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: orange;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}


        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }


        .text {
            color: white;
            background-color: black;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }


        }


        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }


        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }
    </style>
</head>
<body>
<div class="content-main" >
    <div class="w3-row w3-padding-64">
        <div class="w3-twothird w3-container">

<div style="padding-left:30px">
    <h2 style="color:blue;font-size:20;">Consumer Advice Help Portal</h2>

</div>
            <table style="width:100%">
<tr>
    <td>
        r development, we used the Video ICT most popular trio of tools which is HTML, CSS, and JavaScript. HTML has been used for the website's content, CSS for its design, and JavaScript to introduce the slideshow on the homepage. CSS enabled us to create a consistent template, which will be rescaled accordingly on smaller screens. In additon, we have used PHP to deliver the features of the website. (say what feature
        We are here to help you
    </td>
    <td width = 80% height="100%">
        <div class="slideshow-container">

            <div class="mySlides fade">

                <img src="static/proofofpurchase.jpg" style="width:60%">
                <div class="text">We are here to help you</div>
            </div>

            <div class="mySlides fade">

                <img src="static/clothesandfashionlogo.jpg" style="width:70%">
                <div class="text"> Do you have an Issue with returning a Product?</div>
            </div>

            <div class="mySlides fade">

                <img src="static/electrical-products.jpeg" style="width:100%">
                <div class="text">  Do you have an Issue with returning a faulty Product?</div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </td>
</tr>
            </table>


<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000);
    }
</script>
        </div>
    </div>
</div>




<?php
include_once("footer.php");
?>
</body>
</html>
