<?php
include_once __DIR__."/functions.php";
include_once __DIR__."/query-builder/Query.php";
$name=post('name');
$email=post('email');
//echo $name;
//echo $email;

$query=new Query();
if($query->insert('emp',[
"name"=>$name,
"email"=>$email,
]))
{
	//echo "data inserted with pk=".$query->getId();
	include_once __DIR__.'/show.php';
}else{
	echo "Insert Error";
}
?>