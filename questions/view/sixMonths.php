
    <br><br>
    <h1>When did you purchase the product?</h1>
    <table style="width:100%">
        <form action="advice.php" method="post"

        <tr>
            <th><img src="/consumer-advice/static/yes.jpg"   alt="0-6 months""></th> <!-- Option 1-->
            <th><img src="/consumer-advice/static/no.jpg"  alt="6 months +""></th> <!-- Option 2-->
        </tr>
        <tr>
            <th>
                <button type="submit" name="choice5" value="less6">0-6 months</button>
            </th>
            <th>
                <button type="submit" name="choice5" value="more6">6 months +</button>
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
