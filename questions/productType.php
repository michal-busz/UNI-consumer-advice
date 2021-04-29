<div class="content-main" style="margin-left:250px">
    <br><br>
    <h1>What is the type of the product?</h1>
    <table style="width:100%">
        <form action="question3.php" method="post"
        <tr>
            <th><img src="/consumer-advice/static/yes.jpg"   alt="Electrical""></th> <!-- Option 1-->
            <th><img src="/consumer-advice/static/yes.jpg"  alt="Clothing & fashion""></th> <!-- Option 2-->
            <th><img src="/consumer-advice/static/yes.jpg"  alt="Food & drink""></th> <!-- Option 3-->
            <th><img src="/consumer-advice/static/yes.jpg"  alt="Digital & download""></th> <!-- Option 4-->
            <th><img src="/consumer-advice/static/yes.jpg"  alt="Vehicle""></th> <!-- Option 5-->
        </tr>
        <tr>
            <th>
                <button type="submit" name="choice2" value="Electrical">Electrical</button>
            </th>
            <th>
                <button type="submit" name="choice2" value="Clothing">Clothing & fashion</button>
            </th>
            <th>
                <button type="submit" name="choice2" value="Food">Food & drink</button>
            </th>
            <th>
                <button type="submit" name="choice2" value="Digital">Digital & download</button>
            </th>
            <th>
                <button type="submit" name="choice2" value="Vehicle">Vehicle</button>
            </th>
            <input type="hidden" name="choice1" value="<?php echo $_POST["choice1"] ?>" />
            </form>
        </tr>
    </table>
    <?php
    include_once("../footer.php");
    ?>
</div>
