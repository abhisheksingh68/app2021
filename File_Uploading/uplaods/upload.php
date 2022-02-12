<?php

echo '<pre>';
 //   print_r($_FILES);
 
 
 $files_arr =$_FILES['attachment'];
 
 $name = $file_arr['name'];
  $typoe = $file_arr['type'];
   $error = $file_arr['error'];
    $tmp_path = $file_arr['tmp_name'];
	 $size = $file_arr['size'];

$err_msg ='';

if($error==0){
	$new_location
}
