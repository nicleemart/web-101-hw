<?php 
        $operator = array(
        "add"=>"+",
        "subtract"=>"-",
        "multiply"=>"x"
    );

function calculator($operator)
{   $firstNum = $_GET["firstNum"];
    $secondNum = $_GET["secondNum"];
    $Submit = $_GET["Submit"];
    global $operator;

    if (isset($Submit) && ($operator == "add")) {
        return $firstNum + $secondNum;
    } elseif (isset($Submit) && ($operator == "subtract")) {
        return $firstNum - $secondNum;
    }
}

echo calculator();
?>

<form method="get" action="">
	<input type="text" name="firstNum" placeholder="Enter a number">
    <select>
       <?php
   foreach($operator as $key => $value){
      echo "<option name=".$key.">".$value."</option>";
  }
 ?>
    </select>
    <input type="text" name="secondNum" placeholder="Enter a number">
	<input type="submit" name="Submit">
</form>