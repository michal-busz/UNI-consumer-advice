<div class="content-main" style="margin-left:250px">
    <br><br>
    <h1>Where did you buy the product?</h1>
    <table style="width:100%">
        <form action="question4.php" method="post"
        <tr>
            <th><img src="/consumer-advice/static/yes.jpg"   alt="Trader / Dealership""></th> <!-- Option 1-->
            <th><img src="/consumer-advice/static/yes.jpg"  alt="Private""></th> <!-- Option 2-->
        </tr>
        <tr>
            <th>
                <button type="submit" name="choice3" value="Trader">Trader / Dealership</button>
            </th>
            <th>
                <button type="submit" name="choice3" value="Privates">Private</button>
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
