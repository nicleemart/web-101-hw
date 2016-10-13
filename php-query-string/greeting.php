<form method="get" action="">
	<input type="text" name="name" placeholder="Enter Your Name">
	<input type="submit" name="Submit">
</form>

<?php
function greeting($name)
{
	$name = strtolower($name);
	$Submit = $_GET["Submit"];

    if (isset($Submit) && ($name == "nikki")) {
        return "Nikki is the best name ever!";
    } elseif (isset($Submit) && ($name == "garnet")) {
        return "I drink coffee for breakfast";
    } elseif (isset($Submit) && ($name == "amethyst")) {
        return "Shorty Squad out.";
    } elseif (isset($Submit) && ($name == "pearl")) {
        return "I like to watch you sleep sometimes. And by sometimes, I mean often.";
    } elseif (isset($Submit) && ($name == "steven")) {
        return "No more cat fingers! I want Steven fingers! And I don't mean little me heads on fingers, I mean my regular fingers!";
    } elseif (isset($Submit))  {
        return "Try a cooler name next time.";
    }
} 
	echo greeting($_GET["name"]); 
?>