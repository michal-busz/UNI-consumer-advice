<div class="content-main" style="margin-left:250px">
    <br><br><h1>Question 4: Do you have proof of purchase?</h1>
    <table style="width:100%">
        <form action="question5.php" method="post">
        <tr>
            <th style="width:50%;"><img src="/consumer-advice/static/q4_yesproof.jpg" style="display:block;" width="90%" height="450px" alt="Yes"></th> <!-- Option 1-->
            <th style="width:50%;"><img src="/consumer-advice/static/q4_noproof.jpg"  style="display:block;" width="90%" height="90%" alt="No"></th> <!-- Option 2-->
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