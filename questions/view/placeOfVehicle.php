<div class="content-main" style="margin-left:250px">
    <br><br><h1>Question 3: Where did you buy the faulty vehicle?</h1>
    <table style="width:100%">
        <form action="question4.php" method="post"
        <tr>
            <th style="width:50%;"><img src="/consumer-advice/static/q3_tradedealership.jpg" style="display:block;" width="100%" height="100%" alt="Trader / Dealership"></th> <!-- Option 1-->
            <th style="width:50%;"><img src="/consumer-advice/static/q3_private.jpg" style="display:block;" width="100%" height="100%" alt="Private"></th> <!-- Option 2-->
        </tr>
        <tr>
            <th>
                <button type="submit" name="choice3" value="Trader" class="qbuttonstyle">Trader / Dealership</button>
            </th>
            <th>
                <button type="submit" name="choice3" value="Privates" class="qbuttonstyle">Private (e.g. eBay)</button>
            </th>
            <input type="hidden" name="choice1" value="<?php echo $_POST["choice1"] ?>" />
            <input type="hidden" name="choice2" value="<?php echo $_POST["choice2"] ?>" />
            </form>
        </tr>
    </table>
    <?php
    include_once ("choices.php");
    include_once("../footer.php");
    ?>
</div>
