<?php
//step1: make connection
include __DIR__.'/dbconnect.php';

//step2:prepare the Query

$id=readline('Enter userid ');

$sql="Delete from emp where id='{$id}';";

//step3:Execute the query or fire the query
if(mysqli_query($conn,$sql)){
	if(mysqli_affected_rows($conn)>0){
	echo 'Record Deleted Successfully';
	}else{
		echo 'Can not Deleted Either Record Does not exits or Id is Wrong';
	}
	
}else{
	echo 'Record not deleted'.mysqli_error($conn);
}