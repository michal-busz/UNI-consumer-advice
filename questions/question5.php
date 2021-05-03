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

<body>
<div class="content-main" style="margin-left:250px">
<?php
if($_POST["choice1"]== "no")
    include_once ("view/notfaulty.php");
else if ($_POST["choice4"]== "no")
    include_once ("view/nohelp.php");
else if($_POST["choice3"] == "Online" OR $_POST["choice3"] == "Store" OR $_POST["choice3"] == "Phone" AND $_POST["choice4"] == "yes" AND $_POST["choice4"])
    include_once("view/threeOptions.php");
else if ($_POST["choice3"] == "Private" AND $_POST["choice4"]=="yes")
    include_once("view/twoMonths.php");
else if ($_POST["choice3"] == "Trader" AND $_POST["choice4"]=="yes")
    include_once("view/sixMonths.php");
else if ($_POST["choice3"]=="Privates" AND $_POST["choice4"]=="yes")
    include_once("view/singleOption.php");
include_once ("choices.php");
?>
<!-- Main content-->
</div>
</body>
</html>
