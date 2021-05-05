<div class="content-main" style="margin-left:250px">
    <h1>Question 4: Do you have proof of purchase?</h1>
    <table style="width:100%">
        <form action="question5.php" method="post">
        <tr>
            <th><img src="/consumer-advice/static/yes.jpg"   alt="Yes""></th> <!-- Option 1-->
            <th><img src="/consumer-advice/static/no.jpg"  alt="No""></th> <!-- Option 2-->
        </tr>
        <tr>
            <th>
                <button type="submit" name="choice4" value="yes" class="qbuttonstyle">Yes</button>
            </th>
            <th>
                <button type="submit" name="choice4" value="no" class="qbuttonstyle">No</button>
            </th>
            <input type="hidden" name="choice1" value="<?php echo $_POST["choice1"] ?>" />
            <input type="hidden" name="choice2" value="<?php echo $_POST["choice2"] ?>" />
            <input type="hidden" name="choice3" value="<?php echo $_POST["choice3"] ?>" />
            </form>
        </tr>
    </table>
    <?php
    include_once ("choices.php");
    include_once("../footer.php");
    ?>
</div>