<?php
require_once __DIR__.'/query-builder/Query.php';
require_once __DIR__.'/functions.php';
header("Content-Type:application/json");
http_response_code(200);

if($_SERVER['REQUEST_METHOD']=='POST'){
	$query=new Query();
	
	if($query->insert('emp',[
      'name'=>post('name'),
      'email'=>post('email'),
	])){
		$id=$query->getId();

	$response=array(
     'code'=>200,
     'status'=>true,
     'message'=>'Employee data Record Found',
     'error'=>false,
     'data'=>[
           'id'=>$id
       ],
	);

}else{
	$response=array(
     'code'=>201,
     'status'=>false,
     'message'=>'No Records Found',
     'error'=>true,
     'data'=>[],
	);
}
}else{
	  $response=array(
     'code'=>201,
     'status'=>false,
     'message'=>'Invalid Request GET',
     'error'=>true,
     'data'=>[],
	);

}
	echo json_encode($response,JSON_PRETTY_PRINT);
	exit();

?>