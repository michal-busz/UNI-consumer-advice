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
<!-- Main content-->
<div class="content-main" style="margin-left:250px">
    <br><br>
    <h1>Question 1: Is you product faulty?</h1>
    <table style="width:100%">
        <form action="question2.php" method="post"
              <tr>
                  <th><img src="/consumer-advice/static/yes.jpg"  alt="Product is faulty""></th> <!-- Option 1-->
                  <th><img src="/consumer-advice/static/no.jpg"  alt="Product is not faulty""></th>  <!-- Option 2-->
              </tr>
        <tr>
            <th>
                <button type="submit" name="choice1" value="yes">Yes</button>
            </th>
            <th>
                <button type="submit" name="choice1" value="no">No</button>
            </th>
    </form>
        </tr>
    </table>
    <?php
    include_once("../footer.php");
    ?>
</div>
</body>
</html>
