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
include_once("../sidebar.php");
?>
<body>
<!-- Main content-->
<div class="content-main" style="margin-left:250px">
    <br><br>
    <h1>Question 1: Is you product faulty?</h1><br>
    <table style="width:100%">
        <form action="question2.php" method="post">
            <tr>
                <td style="vertical-align:top;">
                    <h2><b>Definition of a Faulty Product</b></h2>
                    <p>If your item has arrived faulty or you have something wrong with your item, you may be entitled to receive a refund, a repair, or a replacement.<br><br>
                    <h3>Your legal rights:</h3>
                    <ul>
                        <li>broken or damaged ('not of satisfactory quality')</li>
                        <li>unusable (‘not fit for purpose’)</li>
                        <li>not what was advertised or doesn’t match the seller’s description</li>
                    </ul><br>
                    <h3>No legal rights:</h3>
                    <ul>    
                        <li>it was damaged by wear and tear, an accident or misuse</li>
                        <li>you knew about the fault before you bought the item</li>
                        <li>you’ve just changed your mind</li>
                    </ul></p>
                </td>
                <td>         
                    <iframe width="852" height="480"
                    src="https://www.youtube.com/embed/zHRVpyl2UWw" title="YouTube video player">
                    </iframe> 
                </td>
            </tr>
                <tr>
                    <th style="width:50%;"><img src="/consumer-advice/static/q1_yes.jpg" style="display:block;" width="100%" height="100%" alt="Product is faulty"></th> <!-- Option 1-->
                    <th style="width:50%;"><img src="/consumer-advice/static/q1_no.jpg"  style="display:block;" width="100%" height="100%" alt="Product is not faulty"></th>  <!-- Option 2-->
                </tr>
            <tr>
                <th>
                    <button type="submit" name="choice1" value="yes" class="qbuttonstyle">Yes</button>
                </th>
                <th>
                    <button type="submit" name="choice1" value="no" class="qbuttonstyle">No</button>
                </th>
            </tr>
        </form>
    </table><br>

    <?php
    include_once("../footer.php");
    ?>
</div>
</body>
</html>
