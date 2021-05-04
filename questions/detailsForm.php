<!DOCTYPE html>
<html lang="en">
<title>Customer advice</title>
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

?>
<div class="content-main" style="margin-left:250px">
    <br><br>
    <h1>Template form</h1>
<form action="upload.php" target="_blank" method="post" enctype="multipart/form-data">
    Your name: <input type="text" name="name" required><br>
    Your email: <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Provide valid email "><br>
    Your phone number: <input type="number" name="number" required ><br>
    Subject: <input type="text" name="subject" required><br>
    Company name: <input type="text" name="company" required><br>
    Company address:
    Street number: <input type="number" name="stNo" required><br>
    Adress Line 1: <input type="text" name="address1" required><br>
    Adress Line 2: <input type="text" name="address2"><br>
    Town or city: <input type="text" name="town"required><br>
    Postcode: <input type="text" name="postCode" required ><br>
    <input type="file" name="image" id="image" size="50" required><br><br>
    <input onclick='getElementById("thanks").innerHTML = "Thanks for using our generator!"' type="submit" value="Generate letter">
    <p id="thanks"></p>
</form>
</div>

<!-- TODO form validation-->