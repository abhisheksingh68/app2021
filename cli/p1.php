<?php
//wap in php to foreach array
$data=[
[
'id'=>'1',
'name'=>'Ravi',
'class'=>'12th'
],
[
'id'=>'2',
'name'=>'Mohan',
'class'=>'10th'
],
[
'id'=>'3',
'name'=>'sohan',
'class'=>'11th'
],
];
foreach($data as $user){
	echo "------------ \n";
	echo "user id={$user['id']} \n";
	echo "user name={$user['name']} \n";
	echo "user class={$user['class']} \n";
	echo "------------ \n";
}