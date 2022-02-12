<?php
require_once __DIR__.'/query-builder/Query.php';
require_once __DIR__.'/functions.php';
header("Content-Type:application/json");
http_response_code(200);

if($_SERVER['REQUEST_METHOD']=='POST'){


      $id=post('id');
	$query=new Query();
	
	if($query->delete('emp')->where('id',$id)->commit()){
        $response=array(
          'code'=>200,
          'status'=>true,
          'message'=>'Record Deleted Successfully',
          'error'=>false,
           'data'=>[],
      );
      }else
      {
       $response=array(
         'code'=>201,
         'status'=>false,
         'message'=>'Can not Deleted Record',
         'error'=>true,
         'data'=>[],
      );
     }

	

}else{
	  $response=array(
          'code'=>201,
          'status'=>false,
          'message'=>'Invalid Request POST',
          'error'=>true,
          'data'=>[],
	);

}
	echo json_encode($response,JSON_PRETTY_PRINT);
	exit();

?>