<?php include_once __DIR__."/query-builder/Query.php"; 
include_once __DIR__.'/functions.php';
$query=new Query();
$records=$query->select('*')->table('emp')->allRecords(); ?>
<html>
<head>
</head>
<body>
	<table style="width:100%; text-align:center;" cellspacing='0px'; cellpadding="10px" border='1px'; rules="all">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>edit1</th>
			<th>edit2</th>
			<th>delete1</th>
			<th>delete2</th>
		</tr>
	
		<?php foreach($records as $row) { ?>
	   
	   <tr>
	   	<td><?php echo $row->id; ?></td>
	   	<td><?php echo $row->name; ?></td>
	   	<td><?php echo $row->email; ?></td>
	   	<td><a href="<?php echo url("edit1.php?id={$row->id}"); ?>">edit1</a></td>
	   <td><a href="<?php echo url("edit2.php?id={$row->id}"); ?>">edit2</a></td>
	   <td><a href="<?php echo url("delete1.php?id={$row->id}"); ?>">delete1</a></td>
	   <td><a href="javascript:confirmDelete('<?php echo $row->id ?>')";>delete2</a></td>
	   </tr>
	<?php } ?>
	</table>
	<script>
		function confirmDelete(id){
			if(window.confirm("Are you sure want to Delete ?")){
				window.location.href="<?php echo url('delete2.php?id=')?>"+id;
			}
		}
	</script>

</body>
</html>