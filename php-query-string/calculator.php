<form method="get" action="">
	<input type="text" name="firstNum" placeholder="Enter a number">
    <select>
      <option value="add" name="add">+</option>
    </select>
    <input type="text" name="secondNum" placeholder="Enter a number">
	<input type="submit" name="Submit">
</form>

<?php
function calculator($firstNum, $operator, $secondNum)
{
	$name = ucfirst(strtolower($name));
	$Submit = $_GET["Submit"];

    if (isset($Submit) && ($name == "Nikki")) {
        return "Nikki is the best name ever!";
    } elseif (isset($Submit) && ($name == "Garnet")) {
        return "I drink coffee for breakfast";
    } elseif (isset($Submit) && ($name == "Amethyst")) {
        return "Shorty Squad out.";
    } elseif (isset($Submit) && ($name == "Pearl")) {
        return "I like to watch you sleep sometimes. And by sometimes, I mean often.";
    } elseif (isset($Submit) && ($name == "Steven")) {
        return "No more cat fingers! I want Steven fingers! And I don't mean little me heads on fingers, I mean my regular fingers!";
    } elseif (isset($Submit))  {
        return "Oh, hey $name. Try a cooler name next time.";
    }
} 
	echo greeting($_GET["name"]); 
?>