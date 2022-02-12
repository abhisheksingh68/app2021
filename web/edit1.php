<?php include_once __DIR__.'/functions.php'; 
include_once __DIR__."/query-builder/Query.php"; 
$id = get('id');
if(!empty($id)){
	$query = new Query();
	$record=$query->Select('*')->table('emp')->where('id',$id)->first();
}
?>
<html>
<head>
</head>
<body>
	<form action="<?php echo url("updateHandler.php"); ?>" method="post">
		NAME<br><input type="text" name="name" value="<?php echo $record->name; ?>"><br>
		<input type="hidden" name="id" value="<?php echo $record->id; ?>"><br>
		Email<br><input type="email" name="email"  value="<?php echo $record->email; ?>"><br>
		<input type="submit" value="Update" name="save">
	</form>
		
	</form>

</body>
</html>