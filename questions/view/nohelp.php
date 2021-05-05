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
        Unfortunately, without a proof of purchase, we are unable to advice you any further. <br>Please contact your seller, they may be able to offer you some advice or alternative, in line with ther policies.
    </table>
    <?php
    include_once ("choices.php");
    include_once("../footer.php");
    ?>
</div>
</body>
</html>
