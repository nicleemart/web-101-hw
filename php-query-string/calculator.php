<?php

    $operator = array(
        "add"=>"+",
        "subtract"=>"-",
        "multiply"=>"x"
    );

    if (!isset($_GET['submit'])) {

} 
    
?>

<form method="get" action="">
	<input type="text" name="firstNum" placeholder="Enter a number">
    <select>
       <?php
   foreach($operator as $key => $value){
      echo '<option value="'.$key.'">'.$value.'</option>';
  }
 ?>
    </select>
    <input type="text" name="secondNum" placeholder="Enter a number">
	<input type="submit" name="Submit">
</form>