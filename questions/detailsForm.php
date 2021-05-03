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
include_once("../sidebar.php");
?>
<div class="content-main" style="margin-left:250px">
    <br><br><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Your name: <input type="text" name="name"><br>
    Your email: <input type="text" name="email"><br>
    Your phone number: <input type="text" name="number"><br>
    Subject: <input type="text" name="subject"><br>
    Company name: <input type="text" name="company"><br>
    Company address:
    Street number: <input type="text" name="stNo"><br>
    Adress Line 1: <input type="text" name="address1"><br>
    Adress Line 2: <input type="text" name="address2"><br>
    Post code: <input type="text" name="postCode"><br>
    Town: <input type="text" name="town"><br>
    <input type="file" name="image" id="image" size="50">
    <input type="submit">
</form>
</div>

<!-- TODO form validation-->