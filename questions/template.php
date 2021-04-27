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
</style>
<?php
include_once("../header.php");
include_once("../sidebar.php");
?>
<body>
<!-- Main content-->
<div class="content-main" style="margin-left:250px">
    <a href="https://www.google.com"><img src="../static/image.jpg" alt="image description ""></a>

    <form action="question2.php" method="post">
        Name: <input type="radio"  name="name"><br>
        Name1: <input type="radio"  name="name"><br>
        Name2: <input type="radio"  name="name"><br>
        Name3: <input type="radio"  name="name"><br>
        Name4: <input type="radio" name="name"><br>
        <input type="submit">
    </form>

    <?php
    include_once("../footer.php");
    ?>
</div>
</body>
</html>
