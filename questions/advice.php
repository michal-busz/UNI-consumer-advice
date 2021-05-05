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
<br><br>
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
    else if(($_POST["choice3"] == "Online" OR $_POST["choice3"] == "Store" OR $_POST["choice3"] == "Phone") AND $_POST["choice4"] == "yes" AND $_POST["choice5"] == "less30")
        include_once("advice/scenario1.php");
    else if (($_POST["choice3"] == "Online" OR $_POST["choice3"] == "Store" OR $_POST["choice3"] == "Phone") AND $_POST["choice4"] == "yes" AND $_POST["choice5"] == "more30")
        include_once ("advice/scenario2.php");
    else if (($_POST["choice3"] == "Online" OR $_POST["choice3"] == "Store" OR $_POST["choice3"] == "Phone") AND $_POST["choice4"] == "yes" AND $_POST["choice5"] == "morethan6")
        include_once ("advice/scenario3.php");
    else if ($_POST["choice3"] == "Private" AND $_POST["choice4"]=="yes" AND $_POST["choice5"] == "less2")
        include_once("advice/scenario4.php");
    else if ($_POST["choice3"] == "Private" AND $_POST["choice4"]=="yes" AND $_POST["choice5"] == "more2")
        include_once("advice/scenario5.php");
    else if ($_POST["choice3"] == "Trader" AND $_POST["choice4"]=="yes" AND $_POST["choice5"] == "less6")
        include_once("advice/scenario6.php");
    else if ($_POST["choice3"] == "Trader" AND $_POST["choice4"]=="yes" AND $_POST["choice5"] == "more6")
        include_once("advice/scenario7.php");
    else
        include_once("advice/scenario8.php");

    include_once ("choices.php");
    ?>
    <form action="detailsForm.php" method="post">
    <input type="hidden" name="choice1" value="<?php echo $_POST["choice1"] ?>" />
    <input type="hidden" name="choice2" value="<?php echo $_POST["choice2"] ?>" />
    <input type="hidden" name="choice3" value="<?php echo $_POST["choice3"] ?>" />
    <input type="hidden" name="choice4" value="<?php echo $_POST["choice4"] ?>" />
    <input type="hidden" name="choice5" value="<?php echo $_POST["choice5"] ?>" />
        <br><input type="submit" value="Try our refund letter generator">
</div>
</body>
</html>
