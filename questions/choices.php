<?php
// START FORM
if(isset($_POST['choice5']))
    echo "<br><form action=\"advice.php\" method=\"post\">";
else if(isset($_POST['choice4']))
    echo "<br><form action=\"/consumer-advice/questions/question5.php\" method=\"post\">";
else if(isset($_POST['choice3']))
    echo "<br><form action=\"/consumer-advice/questions/question4.php\" method=\"post\">";
else if(isset($_POST['choice2']))
    echo "<br><form action=\"/consumer-advice/questions/question3.php\" method=\"post\">";
else if(isset($_POST['choice1']))
    echo "<br><form action=\"/consumer-advice/questions/question2.php\" method=\"post\">";
else
    echo "<br><form action=\"/consumer-advice/questions/question1.php\" method=\"post\">";

    //QUESTION 1
if(isset($_POST['choice1']))
  echo "Your choices:
<label for=\"choice1\">Is your product faulty?:</label>
  <select name=\"choice1\" id=\"choice1\">";

if(($_POST['choice1'] == "yes"))
 echo  "<option value=\"yes\" selected>Yes</option>
    <option value=\"no\">No</option>";

else
echo  "<option value=\"yes\" >Yes</option>
    <option value=\"no\" selected>No</option>";

 echo "</select>";
// QUESTION 2
if(isset($_POST['choice2'])){
 echo "<br><label for=\"choice2\">What is the type of the product?</label>
 <select name=\"choice2\" id=\"choice2\">";
$choices2 = array("Electrical", "Clothing", "Food", "Digital", "Vehicle");
foreach ($choices2 as $value){
    if ($_POST['choice2']== $value)
        echo "<option value=\"".$value."\" selected>".$value."</option>";
    else
        echo "<option value=\"".$value."\" >".$value."</option>";
}
    echo "</select>";}
//QUESTION 3
if(isset($_POST['choice3'])){
    echo "<br><label for=\"choice3\">Where did you buy the product?</label>
 <select name=\"choice3\" id=\"choice3\">";
    if($_POST['choice2'] == "Vehicle")
        $choices3 = array("Trader", "Privates");
    else
        $choices3 = array("Online", "Store", "Phone", "Private");
    foreach ($choices3 as $value){
        if ($_POST['choice3']== $value)
            echo "<option value=\"".$value."\" selected>".$value."</option>";
        else
            echo "<option value=\"".$value."\" >".$value."</option>";
    }
    echo "</select>";}

//QUESTION 4
if(isset($_POST['choice4'])){
    echo "<br><label for=\"choice4\">Do you ahve proof of purchase?</label>
  <select name=\"choice4\" id=\"choice4\">";

if(($_POST['choice4'] == "yes"))
    echo  "<option value=\"yes\" selected>Yes</option>
    <option value=\"no\">No</option>";

else
    echo  "<option value=\"yes\" >Yes</option>
    <option value=\"no\" selected>No</option>";

echo "</select>";
}
//QUESTION 5
if(isset($_POST['choice5'])){
    echo "<br><label for=\"choice5\">When did you purchase the product?</label>
 <select name=\"choice5\" id=\"choice5\">";
    if($_POST["choice3"] == "Online" OR $_POST["choice3"] == "Store" OR $_POST["choice3"] == "Phone" AND $_POST["choice4"] == "yes" AND $_POST["choice4"])
        $choices5 = array("less30", "more30", "morethan6");
    else if ($_POST["choice3"] == "Private" AND $_POST["choice4"]=="yes")
        $choices5 = array( "less2", "more2");
    else if ($_POST["choice3"] == "Trader" AND $_POST["choice4"]=="yes")
        $choices5 = array("less6", "more6");
    else if ($_POST["choice3"]=="Privates" AND $_POST["choice4"]=="yes")
    $choices5 = array("anytime");
    foreach ($choices5 as $value){
        if ($_POST['choice5']== $value)
            echo "<option value=\"".$value."\" selected>".$value."</option>";
        else
            echo "<option value=\"".$value."\" >".$value."</option>";
    }
    echo "</select>";}
// END FORM
 echo "<br><br>
  <br><input type=\"submit\" value=\"Submit\">
</form>";
?>
