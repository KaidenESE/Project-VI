<?php

?>

<!DOCTYPE html>
<html>

	<head><title>Form handler page</Title></head>
	
	<body>
		<p> Form submitted <?php  echo (int) $submitted: ?> </p>
		<ul>
		<li><b>username</b>: <?php echo $_POST['username']; ?></li>
		<li><b>password</b>: <?php echo $_POST['password']; ?></li>
	</ul>
</body>
</html>
