<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';

#step2 : prepare the Query

$name = readline('Enter Table name:');

$sql = "create table {$name} (id int,
name varchar(40),
email varchar(100)
)";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'table create successfully = '.mysqli_insert_id($conn);

}else{

echo 'Error'.mysqli_error($conn);
}


