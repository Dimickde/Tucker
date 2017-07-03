<!doctype html>
<html>
	<head>	
		<meta charset="utf-8">
<title> Calculator </title>
	</head>
<body>

	<?php
		function add($n1 = 0, $n2 = 0)
		{
			$sum = $n1 + $n2;
			return $sum;
		}

		function subtract($n1 = 0, $n2 = 0)
		{
			$difference = $n1 - $n2;
			return $difference;
		}

		$num1 = $_REQUEST['IntOne'];
		$num2 = $_REQUEST['IntTwo'];

		if (isset($_POST['add']))
		{
			 
			echo "Your sum is: " . add($num1, $num2);
		}

		else
		{
			
			echo "Your difference is: " . subtract($num1, $num2);
		}

		?>

</form>
</body>
</html>