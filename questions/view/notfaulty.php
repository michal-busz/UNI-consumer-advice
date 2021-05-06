<!DOCTYPE html>
<html lang="en">
<title>Consumer Advice Portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../w3.css">
<link rel="stylesheet" href="../../w3-black.css">
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
<body>
<!-- Main content-->
<div class="content-main" style="margin-left:250px">
    <br><br>
    <h1>Sorry we're not able to help you in that case</h1>
    <table style="width:100%">
        <tr>
            <td>
                <p>If your item is not faulty, the retailer is under no legal obligation to give you a refund. They may offer an exchange as a service of good will. We advise that you look at the Return Policies on the seller’s website.<br><br>
                Useful links to policies for major sellers:<br>
                <h3>Electricals:</h3>
                <ul>
                    <li><a href="https://www.currys.co.uk/gbuk/help-and-services/shopping-with-us/returns-and-refunds-16-commercial.html?subTab=1">Currys PC World</a></li>
                </ul>
                <h3>Clothing & fashion:</h3>
                <ul>
                    <li><a href="https://www.asos.com/customer-care/returns-refunds/what-is-your-returns-policy/">ASOS</a></li>
                </ul>
                </p>
            </td>
        </tr>
    </table>
    <?php
    include_once ("choices.php");
    include_once("../footer.php");
    ?>
</div>
</body>
</html>
