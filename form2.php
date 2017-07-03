<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
<title>Test Document</title>

	</head>
	
		<body>

			<?php
			
				function testName($name)
				{
					if ($name == "Tucker")
					{
						echo "Hello Tucker, welcome back! <br> ";
					}
					else if ($name != "Tucker")
					{
						echo "You are not Tucker, what are you doing here? <br>";
					}
				}
				$getName = $_REQUEST['YourName'];

				testName($getName);
			
			?>
		
		</body>

</html>
