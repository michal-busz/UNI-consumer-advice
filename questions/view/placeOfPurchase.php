<div class="content-main" style="margin-left:250px">
    <br><br> <h1>Question 3: Where did you buy the faulty product?</h1>
    <table style="width:100%">
        <form action="question4.php" method="post">
        <tr>
            <th style="width:25%;"><img src="/consumer-advice/static/q3_online.jpg" style="display:block;" width="100%" height="350px" alt="Online"></th> <!-- Option 1-->
            <th style="width:25%;"><img src="/consumer-advice/static/q3_instore.jpg" style="display:block;" width="100%" height="350px" alt="In store"></th> <!-- Option 2-->
            <th style="width:25%;"><img src="/consumer-advice/static/q3_phone.jpg" style="display:block;" width="100%" height="350px" alt="Phone"></th> <!-- Option 3-->
            <th style="width:25%;"><img src="/consumer-advice/static/q3_private.jpg" style="display:block;" width="100%" height="350px" alt="Private"></th> <!-- Option 4-->
        </tr>
        <tr>
            <th>
                <button type="submit" name="choice3" value="Online" class="qbuttonstyle">Online</button>
            </th>
            <th>
                <button type="submit" name="choice3" value="Store" class="qbuttonstyle">In Store</button>
            </th>
            <th>
                <button type="submit" name="choice3" value="Phone" class="qbuttonstyle">Phone</button>
            </th>
            <th>
                <button type="submit" name="choice3" value="Private" class="qbuttonstyle">Private (e.g. eBay)</button>
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
