<!DOCTYPE html>
<html lang="en">
<title>Consumer Advice Portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../w3.css">
<link rel="stylesheet" href="../w3-black.css">
<style>
    html,body,h1,h2,h3,h4,h5,h6 { sans-serif;}
    .sideBar {
        z-index: 3;
        width: 250px;
        top: 43px;
        bottom: 0;
        height: inherit;
    }
    h1 {text-align: center;}
</style>
<?php
include_once("../header.php");
        echo '<nav class="sideBar w3-bar-block w3-collapse w3-large theme-l5 w3-animate-left" id="mySidebar">';
        echo '<h4 class="w3-bar-item"><b>Menu</b></h4>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Start✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 2✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 3✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 4✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 5✓</a>';
        echo "</nav>";
        if($_POST["letter"] == "redund"){

        }


?>
<div class="content-main" style="margin-left:250px">
    <br><br>
    <h1>Template form: Complete the form to generate your personalised letter</h1>
<form action="upload.php" target="_blank" method="post" enctype="multipart/form-data">
    <label class="requiredField" for="name">Your name:</label><br>
    <input type="text" name="name" required><br>
    <label class="requiredField" for="email">Your email:</label><br>
    <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Provide valid email "><br>
    <label class="requiredField" for="number">Your phone number:</label><br>
    <input type="number" name="number" required ><br>
    <label class="requiredField" for="productName">Product of complaint:</label><br>
    <input type="text" name="productName" required><br>
    <label class="requiredField" for="company">Company name:</label><br>
    <input type="text" name="company" required><br>
    <label>Company address</label><br>
    <label class="requiredField" for="stNo">Street number:</label><br>
    <input type="number" name="stNo" required><br>
    <label class="requiredField" for="address1">Address Line 1:</label><br>
    <input type="text" name="address1" required><br>
    <label for="address2">Address Line 2:</label><br>
    <input type="text" name="address2"><br>
    <label class="requiredField" for="town">Town or city:</label><br>
    <input type="text" name="town" required><br>
    <label class="requiredField" for="postCode">Postcode:</label><br>
    <input type="text" name="postCode" required ><br>
    <label for="purchaseDate">Date of purchase:</label>
    <input type="date" id="purchaseDate" name="purchaseDate"
           value="31/01/2021"
           min="01/01/2014" max="01/01/2044">
    <label for="deliveryDate">Delivery date:</label>
    <input type="date" id="deliveryDate" name="deliveryDate"
           value="31/01/2021"
           min="01/01/2014" max="01/01/2044"><br>
    <label class="requiredField" for="price">Price:</label><br>
    <input type="text" name="price" required><br>
    <label for="problems">Problems with your faulty product:</label><br>
    <textarea id="problems" name="problems" rows="3" cols="50" placeholder="Type here a brief description of your problems with your faulty product."></textarea><br>
    <label class="requiredField" for="image">Upload proof of purchase:</label><br>
    <input type="file" name="image" id="image" size="50" required><br><br>
    <input onclick='getElementById("thanks").innerHTML = "Thanks for using our generator!"' type="submit" value="Generate letter">
    <p id="thanks"></p>
</form>
</div>

<!-- TODO form validation-->