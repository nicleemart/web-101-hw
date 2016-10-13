<form method="get" action="">
	<input type="text" name="pw" placeholder="Enter Secret Code">
	<input type="submit" name="Submit">
</form>

<?php
function openSesame()
{
    if (isset($_GET["Submit"]) && ($_GET["pw"] == "doggo")) {
        return "Correct";
    }

    else {
        return "Wrong, try again";
    }
}
?>
