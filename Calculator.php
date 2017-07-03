<?php  $page_title = "Calculator";
include_once('inc/header.php');

?>

<form action = "resources/ParseMath.php" method = "post">
	<div class="form_group">
	<label for="IntOne">Input1: </label>
	<input type = "number" name = "IntOne" class="form-control" placeholder="Input1...">
	</div>
	Input2: <input type = "number" name = "IntTwo"> <br>
	<input type = "submit" name = "add" value = "Add"> 
	<input type = "submit" name = "subtract" value = "Subtract">
</form>




<?php include_once('inc/footer.php');

?>