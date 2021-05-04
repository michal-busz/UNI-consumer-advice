<div class="content-main" style="margin-left:250px">
    <h1>Question 3: Where did you buy the faulty product?</h1>
    <table style="width:100%">
        <form action="question4.php" method="post"
        <tr>
            <th><img src="/consumer-advice/static/yes.jpg"   alt="Online""></th> <!-- Option 1-->
            <th><img src="/consumer-advice/static/yes.jpg"  alt="In store""></th> <!-- Option 2-->
            <th><img src="/consumer-advice/static/yes.jpg"  alt="Phone""></th> <!-- Option 3-->
            <th><img src="/consumer-advice/static/yes.jpg"  alt="Private""></th> <!-- Option 4-->
        </tr>
        <tr>
            <th>
                <button type="submit" name="choice3" value="Online">Online</button>
            </th>
            <th>
                <button type="submit" name="choice3" value="Store">In Store</button>
            </th>
            <th>
                <button type="submit" name="choice3" value="Phone">Phone</button>
            </th>
            <th>
                <button type="submit" name="choice3" value="Private">Private (e.g. eBay)</button>
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
