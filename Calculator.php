<?php  $page_title = "Calculator";
include_once('inc/header.php');

?>

<form action = "resources/ParseMath.php" method = "post">
	<div class="form_group">
	<label for="IntOne">Input1: </label>
	<input type = "number" name = "IntOne" class="form-control" placeholder="Input1...">
	</div>
	<div class="form_group">
	<label for="IntTwo">Input2: </label>
	<input type = "number" name = "IntTwo" class="form-control" placeholder="Input2...">
	</div>
	
	<input type = "submit" name = "add" value = "Add"> 
	<input type = "submit" name = "subtract" value = "Subtract">
</form>




<?php include_once('inc/footer.php');

?>