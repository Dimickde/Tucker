	<?php
	include_once('utilities.php');
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