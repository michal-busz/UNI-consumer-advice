<div class="content-main" style="margin-left:250px">
    <br><br>
    <h1>When did you purchase the product?</h1>
    <table style="width:100%">
        <form action="advice.php" method="post"

        <tr>
            <th><img src="/consumer-advice/static/yes.jpg"   alt="Yes""></th> <!-- Option 1-->
            <th><img src="/consumer-advice/static/no.jpg"  alt="No""></th> <!-- Option 2-->
        </tr>
        <tr>
            <th>
                <button type="submit" name="choice4" value="yes">Yes</button>
            </th>
            <th>
                <button type="submit" name="choice4" value="no">No</button>
            </th>

            <input type="hidden" name="choice1" value="<?php echo $_POST["choice1"] ?>" />
            <input type="hidden" name="choice2" value="<?php echo $_POST["choice2"] ?>" />
            <input type="hidden" name="choice3" value="<?php echo $_POST["choice3"] ?>" />
            <input type="hidden" name="choice4" value="<?php echo $_POST["choice4"] ?>" />
            </form>
        </tr>
    </table>
    <?php
    include_once("../footer.php");
    ?>
</div>