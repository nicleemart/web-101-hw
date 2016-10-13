<form method="get" action="">
	<input type="text" name="pw" placeholder="Enter Secret Code">
	<input type="submit" name="Submit">
</form>

<?php
function openSesame()
{
    if (isset($_GET["Submit"]) && ($_GET["pw"] == "doggo")) {
        echo "Correct!";
    } elseif (isset($_GET["Submit"]))  {
        return "Wrong, try again.";
    }
}
?>

<?php 
	echo openSesame($_GET["pw"]); 
	?>
