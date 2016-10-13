<form method="get" action="">
	<input type="text" name="pw" placeholder="Enter Secret Code">
	<input type="submit" name="Submit">
</form>

<?php
function openSesame($pw)
{
	$pw = strtolower($pw);

    if (isset($_GET["Submit"]) && ($pw == "doggo")) {
        return "Correct!";
    } elseif (isset($_GET["Submit"]))  {
        return "Wrong, try again.";
    }
}
?>

<?php 
	echo openSesame($_GET["pw"]); 
?>