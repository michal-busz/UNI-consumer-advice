
    <br><br>
    <h1>When did you purchase the product?</h1>
    <table style="width:100%">
        <form action="advice.php" method="post"

        <tr>
            <th><img src="/consumer-advice/static/yes.jpg"   alt="Anytime""></th> <!-- Option 1-->
        </tr>
        <tr>
            <th>
                <button type="submit" name="choice5" value="anytime">Anytime</button>
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
