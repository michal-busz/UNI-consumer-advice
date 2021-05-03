<!-- Side bar -->
<nav class="sideBar w3-bar-block w3-collapse w3-large theme-l5 w3-animate-left" id="mySidebar">
    <h4 class="w3-bar-item"><b>Menu</b></h4>
    <?php

    if(isset($_POST['choice5']))
    {echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Start✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 2✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 3✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 4✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 5✓</a>';
}
    else if(isset($_POST['choice4'])) {
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Start✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 2✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 3✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 4✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 5</a>';
        }
    else if(isset($_POST['choice3'])) {
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Start✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 2✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 3✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 4</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 5</a>';
        }
    else if(isset($_POST['choice2']))
    {echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Start✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 2✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 3</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 4</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 5</a>';
}
    else if(isset($_POST['choice1']))
    {echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Start✓</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 2</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 3</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 4</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 5</a>';
}
    else
    {echo '<a class="w3-bar-item w3-button w3-hover-black" href="/consumer-advice/questions/questions.php">Start</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 2</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 3</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 4</a>';
        echo '<a class="w3-bar-item w3-button w3-hover-black" href="#" onclick="doingClick(); return false;">Question 5</a>';
        }



    ?>

</nav>




