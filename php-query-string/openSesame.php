<form method="get" action="">
	<input type="text" name="pw" placeholder="Enter Secret Code">
	<input type="submit" name="Submit">
</form>

<?php
function openSesame($pw)
{
	$pw = strtolower($pw);
	$Submit = $_GET["Submit"];

    if (isset($Submit) && ($pw == "doggo")) {
        return "Correct!";
    } elseif (isset($Submit))  {
        return "Wrong, try again.";
    }
} 
	echo openSesame($_GET["pw"]); 
?>