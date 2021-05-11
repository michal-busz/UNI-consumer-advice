<!-- Side bar -->
<nav class="sideBar w3-bar-block w3-collapse w3-large theme-l5 w3-animate-left" id="mySidebar">
    <h4 class="w3-bar-item" style="text-align:center;"><b>Menu</b></h4>
    <?php

    if(isset($_POST['choice5']))
    {echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Q1: Product faulty?✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q2: Type of product✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q3: Purchase location✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q4: Proof of purchase✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q5: Purchase date✓</a>';
}
    else if(isset($_POST['choice4'])) {
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Q1: Product faulty?✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q2: Type of product✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q3: Purchase location✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q4: Proof of purchase✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black current" href="#" onclick="doingClick(); return false;">Q5: Purchase date</a>';
        }
    else if(isset($_POST['choice3'])) {
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Q1: Product faulty?✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q2: Type of product✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q3: Purchase location✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black current" href="#" onclick="doingClick(); return false;">Q4: Proof of purchase</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q5: Purchase date</a>';
        }
    else if(isset($_POST['choice2']))
    {echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Q1: Product faulty?✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q2: Type of product✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black current" href="#" onclick="doingClick(); return false;">Q3: Purchase location</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q4: Proof of purchase</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q5: Purchase date</a>';
}
    else if(isset($_POST['choice1']))
    {echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Q1: Product faulty?✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black current" href="#" onclick="doingClick(); return false;">Q2: Type of product</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q3: Purchase location</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q4: Proof of purchase</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q5: Purchase date</a>';
}
    else
    {echo '<a class="w3-bar-item w3-button w3-hover-black current" href="/consumer-advice/questions/questions.php">Q1: Product faulty?</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q2: Type of product</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q3: Purchase location</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q4: Proof of purchase</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Q5: Purchase date</a>';
        }



    ?>

</nav>




