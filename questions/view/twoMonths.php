<div class="content-main" style="margin-left:250px">
    <br><br>
    <h1>Question 5: When did you purchase the faulty product?</h1>
    <table style="width:100%">
        <form action="advice.php" method="post">
        <tr>
            <th style="width:50%;"><img src="/consumer-advice/static/q5_0-2months.jpg" style="display:block;" width="100%" height="600px" alt="0-2 months"></th> <!-- Option 1-->
            <th style="width:50%;"><img src="/consumer-advice/static/q5_6monthsplus.jpg" style="display:block;" width="100%" height="600px" alt="2 months +"></th> <!-- Option 2-->
        </tr>
        <tr>
            <th>
                <button type="submit" name="choice5" value="less2" class="qbuttonstyle">0-2 months</button>
            </th>
            <th>
                <button type="submit" name="choice5" value="more2" class="qbuttonstyle">2 months +</button>
            </th>

            <input type="hidden" name="choice1" value="<?php echo $_POST["choice1"] ?>" />
            <input type="hidden" name="choice2" value="<?php echo $_POST["choice2"] ?>" />
            <input type="hidden" name="choice3" value="<?php echo $_POST["choice3"] ?>" />
            <input type="hidden" name="choice4" value="<?php echo $_POST["choice4"] ?>" />
            </form>
        </tr>
    </table>
    <?php
    include_once ("choices.php");
    include_once("../footer.php");
    ?>
</div>
