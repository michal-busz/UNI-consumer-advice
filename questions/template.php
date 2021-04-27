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
    <h1>Question 1 ...............................</h1>
    <table style="width:100%">
        <form action="question2.php" method="post"
              <tr>
                  <th><img src="../static/image.jpg" height="50px" width="50px" alt="image description ""></th> <!-- Option 1-->
                  <th><img src="../static/image.jpg" height="50px" width="50px" alt="image description ""></th>  <!-- Option 2-->
                  <th><img src="../static/image.jpg" height="50px" width="50px" alt="image description ""></th> <!-- Option 3-->
                  <th><img src="../static/image.jpg" height="50px" width="50px" alt="image description ""></th>  <!-- Option 4-->
                  <th><img src="../static/image.jpg" height="50px" width="50px" alt="image description ""></th> <!-- Option 5-->
              </tr>
        <tr>
            <th>
                <button type="submit" name="option" value="1">Option 1</button>
            </th>
            <th>
                <button type="submit" name="option" value="2">Option 2</button>
            </th><th>
                <button type="submit" name="option" value="3">Option 3</button>
            </th><th>
                <button type="submit" name="option" value="4">Option 4</button>
            </th>
            <th>
                <button type="submit" name="option" value="5">Option 5</button>
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
