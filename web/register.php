<?php include_once __DIR__.'/functions.php'; ?>
<html>
<head>
</head>
<body>
	<form action="<?php echo url("registerHandler.php"); ?>" method="post">
		NAME<br><input type="text" name="name"><br>
		Email<br><input type="email" name="email"><br>
		<input type="submit" name="Register">
	</form>
		
	</form>

</body>
</html>