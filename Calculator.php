<?php include_once('inc/header.php');

?>

<form action = "resources/ParseMath.php" method = post>
	Input1: <input type = "number" name = "IntOne"> <br>
	Input2: <input type = "number" name = "IntTwo"> <br>
	<input type = "submit" name = "add" value = "Add"> 
	<input type = "submit" name = "subtract" value = "Subtract">
</form>


<?php include_once('inc/footer.php');

?>