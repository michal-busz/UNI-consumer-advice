<div class="content-main" style="margin-left:250px">
    <h1>Question 2: What is the type of product that is faulty?</h1>
    <table style="width:100%">
        <form action="question3.php" method="post">
        <tr>
            <th style="width:20%;"><img src="/consumer-advice/static/q2_electrical.jpeg" style="display:block;" width="100%" height="100%" alt="Electrical"></th> <!-- Option 1-->
            <th style="width:20%;"><img src="/consumer-advice/static/q2_clothingfashion.jpg" style="display:block;" width="100%" height="250px" alt="Clothing & fashion"></th> <!-- Option 2-->
            <th style="width:20%;"><img src="/consumer-advice/static/q2_fooddrink.jpg" style="display:block;" width="100%" height="250px" alt="Food & drink"></th> <!-- Option 3-->
            <th style="width:20%;"><img src="/consumer-advice/static/q2_digitaldownload.jpg" style="display:block;" width="100%" height="100%" alt="Digital & download"></th> <!-- Option 4-->
            <th style="width:20%;"><img src="/consumer-advice/static/q2_vehicle.jpg" style="display:block;" width="100%" height="100%" alt="Vehicle"></th> <!-- Option 5-->
        </tr>
        <tr>
            <th>
                <button type="submit" name="choice2" value="Electrical" class="qbuttonstyle">Electrical</button>
            </th>
            <th>
                <button type="submit" name="choice2" value="Clothing" class="qbuttonstyle">Clothing & fashion</button>
            </th>
            <th>
                <button type="submit" name="choice2" value="Food" class="qbuttonstyle">Food & drink</button>
            </th>
            <th>
                <button type="submit" name="choice2" value="Digital" class="qbuttonstyle">Digital & download</button>
            </th>
            <th>
                <button type="submit" name="choice2" value="Vehicle" class="qbuttonstyle">Vehicle</button>
            </th>
            <input type="hidden" name="choice1" value="<?php echo $_POST["choice1"] ?>" />
            </form>
        </tr>
    </table>
    <?php
    include_once ("choices.php");
    include_once("../footer.php");
    ?>
</div>
