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
        return "Correct! <br> <img src='https://s-media-cache-ak0.pinimg.com/originals/58/31/12/583112a9efb737afcdce1a059d32e1fd.gif'>";
    } elseif (isset($Submit))  {
        return "Wrong, try again. <br> <img src='breakfast.gif'>";
    }
} 
	echo openSesame($_GET["pw"]); 
?>