<?php
// START FORM
    echo "<br><form action=\"/advice.php\">";

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
    echo "<label for=\"choice4\">Do you ahve proof of purchase?</label>
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
    $choices5 = array("less30", "more30", "morethan6", "less2", "more2", "less6", "more6", "anytime");
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
